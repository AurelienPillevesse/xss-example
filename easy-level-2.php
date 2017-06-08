<html>
	<body>
		<form action="easy-level-2.php" method="POST">
			<label for="nom">Nom</label>
			<input maxlength="10" name="nom" type="text"/>
			<label for="prenom">Prénom</label>
			<input maxlength="10" name="prenom" type="text"/>
			<input type="submit"/>
		</form>
	</body>
</html>

<?php 
$nom ='';
$prenom ='';
if(isset($_POST['nom']))
	$nom = $_POST['nom'];

if(isset($_POST['prenom']))
	$prenom = $_POST['prenom'];


if(isset($_POST['nom']) || isset($_POST['prenom']) ){
	$result = $nom.' '.$prenom;
	echo 'Hello :'.$result;
}
