<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paramètres</title>
	<link rel="stylesheet" href="../style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
				if(isset($_GET["langage"],$_GET["serveur"])){
					echo "Langage : ".$_GET["langage"]."<br>Serveur : "." ".$_GET["serveur"];
				}
			?>
		</div>
	</div>
</body>
</html>