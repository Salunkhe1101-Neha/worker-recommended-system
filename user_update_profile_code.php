<?php
	    require("admin/connection.php");

        $user_id = $_POST['user_id'];
		$name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $location_id = $_POST['location_id'];
		           
        $query = "UPDATE users SET name = '$name', mobile= '$mobile', email = '$email', address = '$address', ";
        $query .= "password = '$password', location_id = $location_id ";
        $query .= "WHERE user_id = ".$user_id;
        mysqli_query($conn, $query);

        if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) 
        {
                    $filename =  $_FILES["pic"]["name"];
		            $target_dir = 'user_pics/'.$filename;

		            if (file_exists($target_dir)) {
		                unlink($target_dir);
		            }
                    
                    move_uploaded_file($_FILES['pic']['tmp_name'], $target_dir);

                    $query = "UPDATE users SET photo = '$target_dir' WHERE user_id = ".$user_id;
                    mysqli_query($conn, $query);
        }

        session_start();
        $_SESSION['errors'] = "Profile Updated...!!";     
        header("Location:user_profile.php");
        
        

?>