<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Superglobal 2</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php
				session_start();
				echo "User_Name : ".$_SESSION['nom']."<br><br>";
				echo "User_FirstName : ".$_SESSION['prenom']."<br><br>";
				echo "User_Age : ".$_SESSION['age']."<br><br>";				
			?>
		</div>
	</div>
</body>
</html>