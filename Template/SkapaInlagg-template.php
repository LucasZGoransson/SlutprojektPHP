<?php
	$namn="";
	
	session_start();
	
	if(isset($_SESSION['username'])){
		$namn=$_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html lang="sv">
	<head>
		<title>Skapa nytt inlägg</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Slutprojekt.css" rel="stylesheet">
	</head>

	<body>
		<?php
			require "../Template/Nav.php";
		?>


		<main role="main">
			<form action="SkapaInlaggRespons.php" method="post">
				<fieldset>
					<legend>Skapa nytt inlägg:</legend><br>
			
					<label for="rubrik">Rubrik:</label><br>
					<input type="text" name="rubrik" required size="50"><br>
		
					<label for="brodtext">Brödtext:</label><br>
					<input type="text" name="brodtext" required size="1000"><br><br>
		
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