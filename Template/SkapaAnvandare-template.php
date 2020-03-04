<?php
	$str = "";
	if(isset($_GET['name']))
	{
		$str=$_GET['name']." är redan använt";
	}
?>	

<!DOCTYPE html>
<html lang="sv">
	<head>
		<title>Skapa användare</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Slutprojekt.css" rel="stylesheet">
	</head>

	<body>
		<?php
			require "../Template/Nav.php";
		?>


		<main role="main">
			<form action="SkapaAnvandareRespons.php" method="post">
				<fieldset>
					<legend>Skapa användare:</legend><br>
		
					<label for="username">Användarnamn:</label><br>
					<input type="username" name="username" required><br>
		
					<label for="password">Lösenord:</label><br>
					<input type="password" name="psw" required><br><br>
					
					<label for="email">E-post:</label><br>
					<input type="email" name="email" required><br>
		
					<label for="Gender">Kön:</label><br>
					<select name="gender">
					<option value="male">Man</option>
					<option value="female">Kvinna</option>
					<option value="other">Annat</option>
		
					<p><?php echo $str;?></p>
		
					<input type="submit" value="Skicka">
				</fieldset>
			</form>  
		</main>

		<div class="sidenav2">
		</div>

		<?php
			require "../Template/Footer.php";
		?>

	</body>
</html>