<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Superglobal</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo scroll">
			<h2>Exercice 1</h2>
			<?php
				echo "User_Agent : ".$_SERVER['HTTP_USER_AGENT']."<br><br>";
				echo "Server_Name : ".$_SERVER['SERVER_NAME']."<br><br>";
				echo "Server_Adress : ".$_SERVER['REMOTE_ADDR']."<br><br>";				
			?>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<?php
				session_start();
				$_SESSION["age"]=28;
				$_SESSION["prenom"]="Mickaël";
				$_SESSION["nom"]="DURAND";
			?>
			<a href="superglobal2.php">Superglobal 2</a>
		</div>
		<div class="exo">
			<h2>Exercice 3</h2>
			<form action="#" method="post" accept-charset="utf-8">
				<input type="text" placeholder="login" name="login">
				<input type="text" placeholder="password" name="password">
				<button type="submit">Submit</button>
			</form>
			
			<?php	
				if(isset($_POST["login"], $_POST["password"])){
					$_COOKIE["login"]=$_POST["login"];
					$_COOKIE["password"]=$_POST["password"];
					echo "login : ".$_COOKIE['login']."<br>";
					echo "Password : ".$_COOKIE['password'];
				}		
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
	</div>
</body>
</html>