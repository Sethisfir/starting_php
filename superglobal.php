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
			<h2>Exercice 3 - 4 - 5</h2>					
			<?php	
				if(isset($_COOKIE["login"], $_COOKIE["password"])){
					echo "<a href='superglobal2.php'>Superglobal 2</a>";
				}else{
					echo "<form action='superglobal2.php' method='post' accept-charset='utf-8'>";
						echo "<input type='text' placeholder='login' name='login'>";
						echo "<input type='text' placeholder='password' name='password'>";
						echo "<button type='submit'>Submit</button>";
					echo "</form>";
				}
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