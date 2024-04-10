<?php
	
	session_start();
	require("admin/connection.php");

	$email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
	$result =  mysqli_query($conn, $query);
	$rows= mysqli_num_rows($result);

	if($rows > 0)
	{
		$data =  mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $data['user_id'];
		$_SESSION['user'] = $data['name'];
		header("Location:user_profile.php");
	}
	else
	{
		$_SESSION['errors'] = "Wrong Username or Password";	
		header("Location:user_login.php");
	}


?>