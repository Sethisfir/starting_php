<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulaire</title>
	<link rel="stylesheet" href="style/css/index.css">
</head>
<body>
	<div id="container">
		<div class="exo">
			<h2>Exercice 1</h2>
			<form action="user.php" method="get" accept-charset="utf-8">
				<input type="text" placeholder="nom" name="nom">
				<input type="text" placeholder="prenom" name="prenom">
				<button type="submit">Submit</button>
			</form>
		</div>
		<div class="exo">
			<h2>Exercice 2</h2>
			<form action="user.php" method="post" accept-charset="utf-8">
				<input type="text" placeholder="nom" name="nom">
				<input type="text" placeholder="prenom" name="prenom">
				<button type="submit">Submit</button>
			</form>
		</div>
		<div class="exo">
			<h2>Exercice 3</h2>
			<form action="user.php" method="get" accept-charset="utf-8">
				<input type="text" placeholder="nom" name="nom">
				<input type="text" placeholder="prenom" name="prenom">
				<button type="submit">Submit</button>
			</form>
		</div>	
		<div class="exo">
			<h2>Exercice 4</h2>
			<form action="user.php" method="post" accept-charset="utf-8">
				<input type="text" placeholder="nom" name="nom">
				<input type="text" placeholder="prenom" name="prenom">
				<button type="submit">Submit</button>
			</form>
		</div>
		<div class="exo" id="ex5">
			<h2>Exercice 5</h2>
			<?php
			if(isset($_POST["nom"],$_POST["prenom"])){
				echo "nom : ".$_POST["nom"]."<br>Prenom : "." ".$_POST["prenom"];;
			}else{ ?>
			<form action="" method="post" accept-charset="utf-8">
				<select name="civilite">
					<option value="Mr">Mr</option>
					<option value="Mme">Mme</option>
				</select>
				<input type="text" placeholder="nom" name="nom">
				<input type="text" placeholder="prenom" name="prenom">
				<button type="submit">Submit</button>
			</form>
			<? }?>
		</div>
	</div>	
</body>
</html>
