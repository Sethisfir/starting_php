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
			function true(){
				return true;
			}
			if(true){
				echo 'test ok';
			}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php	
				function string(string $string){
					echo $string.'<br>';
				}
				if ($string=true){
					echo 'test ok';
				}
			?>
		</div>
		<div class="exo ">
			<h2>Exercice 3</h2>
			<?php
				function danstroissecondes(string $string, string $string2){
					return $string.$string2;
				}
				if (danstroissecondes("1", "2")=="12"){
					echo 'test ok <br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php
				function ablabla (int $nb1, int $nb2){
					if ($nb1<$nb2){
						return "le premier nombre est plus petit";
					}elseif($nb1>$nb2){
						return "le premier nombre est plus grand";
					}else{
						return "les deux nombres sont identiques";
					}
				}
				if (ablabla(3, 4)){
					echo 'test ok <br>';
				}else{
					echo 'NOPE <br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 5</h2>
			<?php
				function ablibli (int $nb, string $st){
					return $nb.$st;
				}
				if (ablibli(2, "testicule")){
					echo 'test ok <br>';
				}else{
					echo 'NOPE <br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 6</h2>
			<?php
				function abloublou ($nom, $prenom, int $age){
					return "Bonjour.$nom.$prenom.tu as .$age. ans !";
				}
				if (abloublou("DURAND","Mickaël",28)){
					echo 'test ok <br>';
				}else{
					echo 'NOPE <br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 7</h2>
			<?php
				function ableble (int $age, $genre){
					if($age>=18){
						if($genre=="homme"){
							return "Vous êtes un homme et vous êtes majeur";
						}else{
							return "Vous êtes une femme et vous êtes majeur";
						}
					}elseif($genre=="homme"){
						return "Vous êtes un homme et vous êtes mineur";
					}else{
						return "Vous êtes une femme et vous êtes mineur";
					}	
				}
				if(ableble(28, "homme")){
					echo 'test ok <br>';
				}else{
					echo 'NOPE <br>';
				}
			?>
		</div>
		<div class="exo">
			<h2>Exercice 8</h2>
			<?php
				function ablublu(int $nb1=3, int $nb2=8, int $nb3=78){
					return $nb1+$nb2+$nb3;
				}
				if(ablublu(3, 4, 5)){
					echo 'test ok <br>';
				}else{
					echo 'NOPE <br>';
				}
			?>
		</div>
	</div>
</body>
</html>