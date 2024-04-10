<?php
	
	session_start();
	require("connection.php");

	$email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
	$result =  mysqli_query($conn, $query);
	
	$rows= mysqli_num_rows($result);

	if($rows > 0)
	{
		$data =  mysqli_fetch_assoc($result);
		$_SESSION['admin'] = $data['name'];
		header("Location:dashboard.php");
	}
	else
	{
		$_SESSION['errors'] = "Wrong Username or Password";
		header("Location:admin_login.php");
	}


?>