<?php
	$namn="";
	
	session_start();
	
	if(isset($_SESSION['username']) && ($_SESSION['status'] == 1)){
		$namn=$_SESSION['username'];

		if (isset($_POST['rubrik']) && isset($_POST['brodtext']))
		{



		$rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$brodtext = filter_input(INPUT_POST, 'brodtext', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		
		require "connect.php";
			
		$sql = "INSERT INTO inlagg (anvnamn, rubrik, brodtext) VALUE (?,?,?)";
			
		$res = $dbh -> prepare($sql);
		$res -> bind_param("sss", $namn, $rubrik, $brodtext);
		$res -> execute();
		
		if(!$res)
		{
			echo "Felaktig sql-fråga";
			exit(1);
		}
			
		header("location:Index.php");
			
		mysqli_close($dbh);
	
		}
	}
	
	else
	{
		header("location:LoggaIn.php");
	}
?>