<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Boucles</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 1</h2>
			<?php		
			$mavariable=0;
			while($mavariable<10){
				echo $mavariable.'/ ';
				$mavariable++;
			}		
			?>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php	
			$mavariable=0;
			$autrevar=42;
			while ($mavariable<20) {
				$total=$mavariable*$autrevar;
				echo $total.'/ ';
				$mavariable++;
			}			
			?>
		</div>
		<div class="exo">
			<h2>Exercice 3</h2>
			<?php
			?>
		</div>
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
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
	</div>
</body>
</html>