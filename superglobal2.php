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
		<div class="exo">
			<h2>Exercice 4</h2>
			<?php	
				if(isset($_POST["login"], $_POST["password"])){
					setcookie("login", $_POST["login"]);
					setcookie("password", $_POST["password"]);	
					echo "Login : ".$_POST["login"]."<br>";
					echo "Password : ".$_POST["password"]."<br>";	
				}else{
					echo "Login : ".$_COOKIE["login"]."<br>";
					echo "Password : ".$_COOKIE["password"]."<br>";
					echo "<form action='superglobal2.php' method='post' accept-charset='utf-8'>";
					echo "<input type='text' placeholder='modifier login' name='login'>";
					echo "<input type='text' placeholder='modifier password' name='password'>";
					echo "<button type='submit'>Submit</button>";
					echo "</form>";
				}
			?>
		</div>
	</div>
</body>
</html>