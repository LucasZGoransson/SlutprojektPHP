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
		<title>Hem</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Slutprojekt.css" rel="stylesheet">
	</head>

	<body>
		<?php
			require "../Template/Nav.php";
		?>


		<main role="main">
			<h1>Välkommen <?php echo $namn;?> till Forumet!</h1>
		</main>

		
		<div class="sidenav2">
		</div>

		<?php
			require "../Template/Footer.php";
		?>

	</body>
</html>
