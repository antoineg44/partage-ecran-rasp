<!DOCTYPE HTML>
<html>
<head>
  <!-- By Clément Horhant - c.horhant[@]gmail.com -->

  <!-- JQuery -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>

  <!-- Perso -->
  <script type="text/javascript" src="js/index.js"></script>

  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title>Accueil Raspberry</title>
</head>
<body style="font-size: inherit;">
  <div class="container">
	
    <div class="row">
      <div class="col-sm">
        <div class="accordion" id="accordionChant">
		<div class="row">
		<div class="col-3 centete">
			<button class="btn btn-warning entete" type="button" onclick="fermerNavi()">Fermer le navigateur web</button>
		</div>
		<div class="col-3 centete">
			<button class="btn btn-success entete" type="button" onclick="unveille()">Allumer écran</button>
			<button class="btn btn-dark entete" type="button" onclick="veille()">Eteindre écran</button>
		</div>
		<div class="col-3 centete">
			<button class="btn btn-outline-danger entete" type="button" onclick="reboot()">Redémarrer la Raspberry</button>
		</div>
		<div class="col-3 centete">
			<button class="btn btn-danger entete" type="button" onclick="eteindre()">Eteindre la Raspberry</button>
		</div>
	</div>
			<div class="fonctionnalites">
			  <h3>Streaming</h3>
			  <div class="card">
				<button class="btn btn-primary" type="button" target="_blank" onclick="window.open('https://<?php echo $_SERVER['SERVER_ADDR']; ?>:4000/startBroad.php','_blank')">Partager mon écran</button>
				<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					Comment partager mon écran ?
					</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionChant">
				<div class="card-body">
					<p>Pour partager l'écran, cliquer sur le bouton ci-dessus : "Partager mon écran", un nouvel onglet s'ouvre (pendant ce temps là, le navigateur internet de la raspberry redémarre).</p>
					<p>La première fois, votre navigateur dit qu'il existe un risque propable de sécurité. Cliquer sur "Avancé" et ensuite sur "Accepter le risque et poursuivre" (vous ne risquez absolument rien car votre ordinateur n'est pas connecté à internet).</p>
					<p>Cliquez enfin sur "partager mon écran", et choissez la fenêtre à partager</p>
				</div>
				</div>
			</div>

			<div class="card">
				<button class="btn btn-primary" type="button" onclick="window.open('https://<?php echo $_SERVER['SERVER_ADDR']; ?>:4000/startCamera.html?server=192.168.0.42', '_blank')">Partager ma caméra</button>
				<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
					<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Comment partager ma caméra ?
					</button>
				</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionChant">
				<div class="card-body">
					<p>Pour partager l'écran, cliquer sur le bouton ci-dessus : "Partager mon écran", un nouvel onglet s'ouvre (pendant ce temps là, le navigateur internet de la raspberry redémarre).</p>
					<p>La première fois, votre navigateur dit qu'il existe un risque propable de sécurité. Cliquer sur "Avancé" et ensuite sur "Accepter le risque et poursuivre" (vous ne risquez absolument rien car votre ordinateur n'est pas connecté à internet).</p>
					<p>Cliquez enfin sur "autoriser", et choissez avec le bouton la caméra à partager</p>
				</div>
				</div>
			</div>
		  </div>

		  <div class="fonctionnalites">
			<h3>Afficher les chants du serveur</h3>
			<div class="card">
			  <button class="btn btn-primary" type="button" onclick="window.location.href = 'http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8080/';">Ouvrir le serveur de chants v4</button>
			  <button class="btn btn-primary" type="button" onclick="window.location.href = 'http://<?php echo $_SERVER['SERVER_ADDR']; ?>/scrolleur-chanteur.3.6.7/';">Ouvrir le serveur de chants v3</button>
			  <div class="card-header" id="headingTwo">
				<h2 class="mb-0">
				  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Comment se servir du serveur de chants ?
				  </button>
				</h2>
			  </div>
			  <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionChant">
				<div class="card-body">
				  <p>Toutes les informations se trouvent dans <a href="https://chantons.netlify.app/">https://chantons.netlify.app/</a> et dans <a href="https://github.com/clementh44/scrolleur-chanteur">https://github.com/clementh44/scrolleur-chanteur</a></p>
				</div>
			  </div>
			</div>
		  </div>		  
        </div>
      </div>
    </div>
  </div>
</body>
</html>
