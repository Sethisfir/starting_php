<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 1</h2>
			<?php
				$nom='DURAND';
				echo "<p>".$nom."</p>";
			?>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php
				$prenom='Mickaël';
				$age=28;
				echo "<p>".$nom."</p>","<p>".$prenom."</p>","<p>".$age."</p>";
			?>
		</div>
		<div class="exo">
			<?php
				//Exercice 3
				$km=1;
				echo "<p>".$km."</p>";
				$km=3;
				echo "<p>".$km."</p>";
				$km=125;
				echo "<p>".$km."</p>";
			?>
		</div>
		<div class="exo">
			<?php
				//Exercice 4
				$string="coucou";
				$int=42;
				$float=3.5;
				$boolean=true;
				echo "<p>".$string."</p>","<p>".$int."</p>","<p>".$float."</p>","<p>".$boolean."</p>";
			?>
		</div>
		<div class="exo">
			<?php
				//Exercice 5
				$int=(int)0;
				echo $int;
				$int=42;
				echo $int;
			?>
		</div>
	</div>
</body>
</html>