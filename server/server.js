/**		CODE SERVEUR		*/

/* UTILISATION DU SERVEUR NODE JS :
uniquement avec la commande : $ node server.js	mais s'exécute automatique au démarage de la raspberry
*/

const express = require("express");
const app = express();

let broadcaster;
const port = 4000;

// utilsation du https obligatoire depuis janvier 2019 pour le partage d'écran
const https = require("https");
const fs = require('fs');
var exec = require('child_process').exec, child;

// certificat https
const path = require("path");
const options = {
  key: fs.readFileSync(path.resolve(__dirname, 'key.pem')),
  cert: fs.readFileSync(path.resolve(__dirname, 'cert.pem'))
};

const server = https.createServer(options, app);

// en http seulement (obsolète depuis janvier 2019)
//const server = https.createServer(app);

// utilisation de socket pour la communication :
const io = require("socket.io")(server);
app.use(express.static(__dirname + "/../public"));

io.sockets.on("error", e => console.log(e));
io.sockets.on("connection", socket => {

  // relatif au streaming :
  socket.on("broadcaster", () => {
    broadcaster = socket.id;
    socket.broadcast.emit("broadcaster");
  });
  socket.on("watcher", () => {
    console.log("watcher : " + socket.id);
    socket.to(broadcaster).emit("watcher", socket.id);
  });
  socket.on("offer", (id, message) => {
    console.log("offer : " + socket.id);
    socket.to(id).emit("offer", socket.id, message);
  });
  socket.on("answer", (id, message) => {
    console.log("réponse : " + socket.id);
    socket.to(id).emit("answer", socket.id, message);
  });
  socket.on("candidate", (id, message) => {
    console.log("Nouveau candidat : " + socket.id);
    socket.to(id).emit("candidate", socket.id, message);
  });
  socket.on("disconnect", () => {
    console.log("déconnexion : " + socket.id);
    socket.to(broadcaster).emit("disconnectPeer", socket.id);
  });

  // relatif aux intéractions utilisateurs :
  socket.on("navigateur", () => {
    child = exec('DISPLAY=:0 chrome-browser "http://localhost/server/"',function () {});
  });
  socket.on("explorateur", () => {
    console.log("ouverture de gestionanaire de fichier ...");
    child = exec('DISPLAY=:0 xdg-open ~/Documents/',function () {});
  });
  socket.on("ok", () => {
    console.log("ok c'est bon");
  });
  socket.on("startBroad", () => {
    console.log("ouverture de gestionaire de fichier ...");
    child = exec('pkill -f "chromium-browser-v7"', function () {});
    startNavi();
  });
});
server.listen(port, () => console.log(`Server is running on port ${port}`));

// ouverture du navigateur après fermeture des anciens onglets
function startNavi(){
  setTimeout(function(){
          child = exec("DISPLAY=:0 chromium-browser --noerrdialogs --disable-session-crashed-bubble --disable-infobars --kiosk https://localhost:4000/", function () {});
  }, 500);
}
