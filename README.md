# partage-ecran-rasp

Projet pour partager son écran ou sa caméra à un serveur, afin de projeter l'information sur une autre machine.
Fonctionne très bien en réseau local, non testé sur le réseau publique.

### Avantage : 
Aucune installation du côté client, le navigateur web se charge de tout.

### Pour le partage d'écran :
Fonctionne avec firefox, chrome et safari sur un pc

### Pour le partage de caméra :
Fonctionne avec firefox, chrome et safari sur pc, android et iphone.

## Utilisation :
Installer apache et nodejs.
Activer le https sur apache.
Placer l'intégralité des fichiers dans le répertoire "html" (ou utiliser un lien symbolique).
Utiliser la commande "npm install"
Verifier que tout fonctionne normalement en tappant "localhost" dans votre navigateur web (une page web doit s'ouvrir avec les différentes fonctionnalités).
Modifier les adresses ip présente dans le fichier index.html (ligne 48, 66, 87 et 88), public/startBroad.html et public/startCamera.html par l'adresse ip de votre machine serveur.
Activer le serveur nodejs via la ligne de commande (node server/server.js).
Tapper l'adresse ip de votre machine serveur pour accéder aux différents paramètres de partage et cliquer sur un bouton partager, votre machine serveur doit utilser l'adresse "https://localhost:4000" pour afficher le retour vidéo.

Pour utiliser les fonctions propre à la raspberry (boutons en haut des pages index.html, utilisez le fichier php/fonction/README.me).
