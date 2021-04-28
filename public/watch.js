let peerConnection;
const config = {};

const socket = io.connect(window.location.origin);
const video = document.querySelector("video");

socket.on("offer", (id, description) => {
  peerConnection = new RTCPeerConnection(config);
  peerConnection
    .setRemoteDescription(description)
    .then(() => peerConnection.createAnswer())
    .then(sdp => peerConnection.setLocalDescription(sdp))
    .then(() => {
      socket.emit("answer", id, peerConnection.localDescription);
    });
  peerConnection.ontrack = event => {
    video.srcObject = event.streams[0];
  };
  peerConnection.onicecandidate = event => {
    if (event.candidate) {
      socket.emit("candidate", id, event.candidate);
    }
  };
});


socket.on("candidate", (id, candidate) => {
  peerConnection
    .addIceCandidate(new RTCIceCandidate(candidate))
    .catch(e => console.error(e));
});

socket.on("connect", () => {
  socket.emit("watcher");
});

socket.on("broadcaster", () => {
  socket.emit("watcher");
});

socket.on("disconnectPeer", () => {
  peerConnection.close();
});

socket.on('marges', (haute, basse, gauche, droite) => {
  console.log("MAJ marges, h:"+haute+" b:"+basse+" g:"+gauche+" d:"+droite);
  document.getElementById("aff_video").style.marginTop = haute+"px";
  document.getElementById("aff_video").style.marginBottom = basse+"px";
  document.getElementById("aff_video").style.marginLeft = gauche+"px";
  document.getElementById("aff_video").style.marginRight = droite+"px";
});

window.onunload = window.onbeforeunload = () => {
  socket.close();
};

function enableAudio() {
  console.log("Enabling audio")
  video.muted = false;
}

document.getElementById("aff_video").style.marginTop = "-25px";
document.getElementById("aff_video").style.marginLeft = "25px";
