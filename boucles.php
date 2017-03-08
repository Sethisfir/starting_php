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
		<div class="exo scroll">
			<h2>Exercice 3</h2>
			<?php
			$maVariable=100;
			$variable=42;
			while($maVariable>=10){
				$total=$maVariable*$variable;
				echo $total.'/ ';
				$maVariable--;
			}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
			$maVariable=1;
			while($maVariable<10){
				echo $maVariable.'/ ';
				$maVariable=$maVariable+($maVariable/2);
			}
			?>
		</div>
		<div class="exo scroll">
			<h2>Exercice 5</h2>
			<?php
			for ($i=1; $i<15 ; $i++){ 
				echo 'On y arrive presque ! <br>';
			}
			?>
		</div>
		<div class="exo scroll">
			<h2>Exercice 6</h2>
			<?php
			for ($i=20; $i>0; $i--){
				echo 'C\'est presque bon ! <br>';
			}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 7</h2>
			<?php
			for ($i=1; $i<100 ; $i=$i+15){ 
				echo 'On tien le bamboo ! <br>';
			}
			?>
		</div>
		<div class="exo scroll">
			<h2>Exercice 8</h2>
			<?php
			for ($i=200; $i>0 ; $i=$i+12){ 
				echo 'Enfin !!! <br>';
			}
			?>
		</div>
	</div>
</body>
</html>