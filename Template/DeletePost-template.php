<?php
	session_start();
	
	if(!isset($_SESSION['username']))
	{
			header("Location:LoggaIn.php");
	}
	
	$namn=$_SESSION['username'];
	require "connect.php";

	if(isset($_GET["aid"]))
		{
			$antal = 1;
			$inlaggID=$_GET['aid'];
			
			$sql="DELETE FROM inlagg WHERE inlaggID=?";
			$res = $dbh -> prepare($sql);
			$res -> bind_param("i", $inlaggID);
			$res -> execute();

			if(!$res)
			{
				echo "Felaktig sql-fråga";
				exit(1);
			}
			
			header("location:Index.php");
			
			mysqli_close($dbh);
		}
	
	
	else
	{
		header("location:Index.php");
	}
?>