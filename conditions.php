<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>conditions</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 1</h2>
			<?php
				$age=21;
				if ($age>18){
					echo 'Vous êtes majeur !';
				}else{
					echo 'Vous êtes mineur !';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php
				$iseasy=true;
				if ($iseasy == true){
					echo 'C\'est facile';
				}else{
					echo 'C\'est difficile';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 3</h2>
			<?php
				$age=28;
				$genre="femme";
				if($genre=="homme"){
					if($age>18){
						echo 'Vous êtes un homme et vous êtes majeur !';
					}else{
						echo 'Vous êtes un homme et vous êtes mineur !';
					}
				}elseif($genre=="femme"){
					if($age>18){
						echo 'Vous êtes une femme et vous êtes majeur !';
					}else{
						echo 'Vous êtes une femme et vous êtes mineur !';
					}
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
				$magnitude=7;
				switch ($magnitude) {
					case '1':
						echo ' Micro-séisme impossible à ressentir.';
						break;
					case '2':
						echo ' Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
						break;
					case '3':
						echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
						break;
					case '4':
						echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
						break;
					case '5':
						echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
						break;
					case '6':
						echo ' Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
						break;
					case '7':
						echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
						break;
					case '8':
						echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
						break;
					case '9':
						echo 'Séisme capable de tout détruire sur une très vaste zone.';
						break;
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 5</h2>
			<?php
				
			?>
		</div>
		<div class="exo">
			<h2>Exercice 6</h2>
			<?php
				
			?>
		</div>
		<div class="exo">
			<h2>Exercice 7</h2>
			<?php
				
			?>
		</div>
		<div class="exo">
			<h2>Exercice 8</h2>
			<?php
				
			?>
		</div>
</body>
</html>