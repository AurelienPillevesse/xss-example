<html>
	<body>
	<h1> Bienvenue sur votre espace client !</h1>
	</body>
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
