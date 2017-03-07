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
</body>
</html>