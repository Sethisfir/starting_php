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
			<h2>Exercice 3</h2>
			<?php
				if(isset($_GET["dateDebut"],$_GET["dateFin"])){
					echo "Date début : ".$_GET["dateDebut"]."<br>Date fin : ".$_GET["dateFin"];
				}
			?>
		</div>
	</div>
</body>
</html>