<html>
	<body>
		<form action="medium-level.php" method="POST">
			<label for="nom">Nom</label>
			<input name="nom" type="text"/>
			<label for="prenom">Prénom</label>
			<input name="prenom" type="text"/>
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
	$result =preg_replace('/<script>/', '', $result);
	echo 'Hello :'.$result;
}
