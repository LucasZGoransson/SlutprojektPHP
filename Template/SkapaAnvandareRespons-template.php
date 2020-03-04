<?php
if(isset($_POST['username']) && isset($_POST['psw']) && isset($_POST['email']) && isset($_POST['gender']))
	{
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$psw = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		
		require "connect.php";
		$sql = "SELECT * FROM users WHERE anvnamn = ? OR email = ?";
		$res = $dbh -> prepare($sql);
		$res -> bind_param("ss", $username, $email);
		$res -> execute();
		$result = $res -> get_result();
		$row = $result -> fetch_assoc();
		
		if($row !== NULL)
		{
			if($row['anvnamn'] === $username)
			{
				header("location:SkapaAnvandare.php?name=$username");
			}
			
			elseif($row['email'] === $email)
			{
				header("location:SkapaAnvandare.php?name=$email");
			}
		}
		
		else
		{
			$status = 1;
			$sql = "INSERT INTO users (anvnamn, email, password, status) VALUE (?,?,?,?)";
			
			$res = $dbh -> prepare($sql);
			$res -> bind_param("sssi", $username, $email, $psw, $status);
			$res -> execute();
			
			if(!$res)
			{
				echo "Felaktig sql-fråga";
				exit(1);
			}
			
			header("location:LoggaIn.php");
			
			mysqli_close($dbh);
		}
	}
	
	else
	{
		header("location:SkapaAnvandare.php");
	}
?>