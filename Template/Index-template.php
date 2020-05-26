<?php
	$namn="";
	$status="";
	
	session_start();
	
	if(isset($_SESSION['username'])){
		$namn=$_SESSION['username'];
		$status=$_SESSION['status'];
	}

	require "connect.php";
	$rubrik = "test";
	$brodtext = "testest";
	$sql = "SELECT * FROM inlagg ORDER BY datum DESC";
	$res = $dbh -> prepare($sql);
	$res -> execute();
	$result = $res -> get_result();
	
?>

<!DOCTYPE html>
<html lang="sv">
	<head>
		<title>Hem</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Slutprojekt.css">
	</head>

	<body>
		<?php
			require "../Template/Nav.php";
		?>


		<main role="main">
			<h1>Välkommen <?php echo $namn;?> till Forumet!</h1>

			<?php
				while($row = $result->fetch_assoc())
				{
					$aid=$row['inlaggID'];
					echo "<article><div class='purple'><h2>";
					echo $row['rubrik'];
					echo "</h2></div><div class='toright'><p>";
					echo $row['brodtext'];
					echo "<p></div>";
					if ($status==2)
					{
						echo "<button type='button' class='small' onclick='DeletePost.php?aid=$aid';>Ta bort</button>";
					}
					echo "<div class='grey'><p><small class='pright'>Skrivet av "; 
					echo $row['anvnamn'];
					echo " ";
					echo $row['datum'];
					echo "</small></p></div></article>";
				}
			?>
		</main>
		
		<div class="sidenav2">
		</div>

		<?php
			require "../Template/Footer.php";
		?>

	</body>
</html>
