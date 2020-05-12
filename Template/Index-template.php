<?php
	$namn="";
	
	session_start();
	
	if(isset($_SESSION['username'])){
		$namn=$_SESSION['username'];
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
			
			<table>
				<th>
					
				</th>
				<td>
					
				</td>
				<td>
				
				</td>
				<?php
						/*while($row = $result->fetch_assoc()) 
						{
							echo "<tr><td>"; 
							echo $row['anvnamn']; 
							echo "</td><td>";
							echo $row['rubrik'];
							echo "</td><td>";
							echo $row['brodtext'];
							echo "</td></tr>";
						}*/
				?>
			</table>
			<?php
				while($row = $result->fetch_assoc())
				{
					echo "<article><h2>";
					echo $row['rubrik'];
					echo "</h2><p>";
					echo $row['brodtext'];
					echo "<p><p><small>Skrivet av "; 
					echo $row['anvnamn'];
					echo " ";
					echo $row['datum'];
					echo "</small></p></article>";
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
