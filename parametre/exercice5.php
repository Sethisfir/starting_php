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
			<h2>Exercice 5</h2>
			<?php
				if(isset($_GET["semaine"])){
					echo "Semaine : ".$_GET["semaine"];
				}
			?>
		</div>
	</div>
</body>
</html>