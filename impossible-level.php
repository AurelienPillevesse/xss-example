<html>
	<body>
		<form action="impossible-level.php" method="POST">
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
	echo htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
}
