<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Les failles XSS</title>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
	mdl-layout--fixed-tabs">
	<header class="mdl-layout__header">
		<div class="mdl-layout__header-row">
			<!-- Title -->
			<span class="mdl-layout-title">Easy level 1</span>
		</div>
		<!-- Tabs -->
		<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
			<a href="#fixed-tab-1" class="mdl-layout__tab is-active">Exercice</a>
			<a href="#fixed-tab-2" class="mdl-layout__tab">Code source</a>
		</div>
	</header>
	<div class="mdl-layout__drawer">
		<span class="mdl-layout-title">Exercices</span>
		<!-- Navigation -->
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="/easy-level.php">Easy level 1</a>
			<a class="mdl-navigation__link" href="/easy-level-2.php">Easy level 2 </a>
			<a class="mdl-navigation__link" href="/medium-level.php">Medium Level</a>
			<a class="mdl-navigation__link" href="/bank-level.php">Bank Level</a>
			<a class="mdl-navigation__link" href="/impossible-level.php">Impossible Level</a>
		</nav>
	</div>
	<main class="mdl-layout__content">
		<section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
			<div class="page-content">
				<center>
					<form action="impossible-level.php" method="POST">
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" name="nom" type="text" id="nom">
							<label class="mdl-textfield__label" for="nom">Nom</label>
						</div>
						<br>
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" name="prenom" type="text" id="prenom">
							<label class="mdl-textfield__label" for="prenom">Prenom</label>
						</div>
						<div>
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
								Button
							</button>
							<div style="margin-top: 20px;">
							</div>
						</div>
						<?php
						$nom ='';
						$prenom ='';
						if(isset($_POST['nom']))
							$nom = $_POST['nom'];

						if(isset($_POST['prenom']))
							$prenom = $_POST['prenom'];


						if(isset($_POST['nom']) || isset($_POST['prenom']) ){
							$result = $nom.' '.$prenom;
							echo htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
						}
						?>
					</form>
				</center>
			</div>
		</section>
		<section class="mdl-layout__tab-panel" id="fixed-tab-2">

			<div class="page-content"  style="margin-left:10%;">
				<pre type="php">
					$nom ='';<br>
					$prenom ='';
					if(isset($_POST['nom']))<br>
						$nom = $_POST['nom'];<br>
					<br>
					if(isset($_POST['prenom']))<br>
						$prenom = $_POST['prenom'];<br>
					<br>
					<br>
					if(isset($_POST['nom']) || isset($_POST['prenom']) ){<br>
						$result = $nom.' '.$prenom;<br>
						echo htmlspecialchars($result, ENT_QUOTES, 'UTF-8');<br>
					}<br>
				</pre>
			</div>
		</section>
	</main>
</div>
</body>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>
