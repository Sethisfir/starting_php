<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Users</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 3</h2>
			<?php
			if(isset($_GET["nom"],$_GET["prenom"])){
				echo "nom : ".$_GET["nom"]."<br>Prenom : "." ".$_GET["prenom"];
			}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
			if(isset($_POST["nom"],$_POST["prenom"])){
				echo "nom : ".$_POST["nom"]."<br>Prenom : "." ".$_POST["prenom"];
			}
			?>
		</div>
	</div>		
</body>
</html>