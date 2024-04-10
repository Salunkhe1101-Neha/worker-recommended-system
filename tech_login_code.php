<?php
	
	session_start();
	require("admin/connection.php");

	$email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM technicians WHERE email = '$email' AND password='$password'";

	$result =  mysqli_query($conn, $query);
	
	$rows= mysqli_num_rows($result);

	if($rows > 0)
	{
		$data =  mysqli_fetch_assoc($result);
        $_SESSION['technician_id'] = $data['technician_id'];
		$_SESSION['tech'] = $data['name'];
		header("Location:tech_profile.php");
	}
	else
	{
		$_SESSION['errors'] = "Wrong Username or Password";	

		header("Location:tech_login.php");
	}


?>