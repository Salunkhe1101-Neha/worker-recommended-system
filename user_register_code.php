<?php
	    require("admin/connection.php");

		$name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $location_id = $_POST['location_id'];

        
	 	$query = "SELECT * FROM users where email='$email'";
         $result =  mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if($rows>0)
		{
            
                session_start();
              $_SESSION['errors'] = "Email Already Exists..!!";                      
			  header("Location:user_register.php");
		}
		else
		{
		 		if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) {
                     $filename =  $_FILES["pic"]["name"];
		            $target_dir = 'user_pics/'.$filename;

		            if (file_exists($target_dir)) {
		                unlink($target_dir);
		            }

		            move_uploaded_file($_FILES['pic']['tmp_name'], $target_dir);

                    $query = "INSERT INTO users(name,mobile, email, address, password, photo, location_id) ";	
                    $query .= "VALUES('$name','$mobile', '$email', '$address' , '$password', '$target_dir', $location_id)";

                 //   echo $query;exit;

                    mysqli_query($conn, $query);

                    session_start();
                    $_SESSION['errors'] = "Registration Successfull...!!";     
                     header("Location:user_login.php");
            }
        }

?>