
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
			<span class="mdl-layout-title">Bank level</span>
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
				<h1> Bienvenue sur votre espace client !</h1>
			</div>
		</section>
			<section class="mdl-layout__tab-panel" id="fixed-tab-2">
				<div class="page-content">
					<pre>
					$amount ='';<br>
					$to ='';
					if(isset($_GET['amount']))<br>
						$amount = $_GET['amount'];<br>
					<br>
					if(isset($_GET['to']))<br>
						$to = $_GET['to'];<br>
					<br>
					if(isset($_GET['amount']) && isset($_GET['to']) ){<br>
						echo 'Vous avez réussi à transferer : '.$amount.' à '.$to;<br>
					}<br>
				</pre>
				</div>
			</section>
	</main>

	</body>

	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>

<?php
$amount ='';
$to ='';
if(isset($_GET['amount']))
	$amount = $_GET['amount'];

if(isset($_GET['to']))
	$to = $_GET['to'];

if(isset($_GET['amount']) && isset($_GET['to']) ){
	echo 'Vous avez réussi à transferer : '.$amount.' à '.$to;
}
?>
