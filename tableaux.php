<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conditions</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo scroll">
			<h2>Exercice 1</h2>
			<?php
				$mois=["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aôut","Septembre","Octobre","Novembre","Décembre"];
				foreach ($mois as $key => $value) {
				 	echo $mois[$key].'<br>';
				}								
			?>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php
				echo $mois[2];
			?>
		</div>
		<div class="exo">
			<h2>Exercice 3</h2>
			<?php
				echo $mois[5];
			?>
		</div>
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
				$mois[3]="Knackie";
				echo $mois[3];
			?>
		</div>
		<div class="exo">
			<h2>Exercice 5</h2>
			<?php
				$Poste=array(
					02 => "Aisne",
					59 => "Nord",
					60 => "Oise",
					62 => "Pas-de-Calais",
					80 => "Somme");

				foreach ($Poste as $key => $value) {
				 	echo $value.'<br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 6</h2>
			<?php
				echo $Poste[59];
			?>
		</div>
		<div class="exo">
			<h2>Exercice 7</h2>
			<?php
				$Poste[51]="Marne";
				echo $Poste[51];
			?>
		</div>
		<div class="exo">
			<h2>Exercice 8</h2>
			<?php
				foreach ($Poste as $key => $value) {
				 	echo $value.'<br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 9</h2>
			<?php
				
			?>
		</div>
		<div class="exo">
			<h2>Exercice 10</h2>
			<?php
				
			?>
		</div>
</body>
</html>