<?php
	    require("admin/connection.php");

		$name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $adhar_no = $_POST['adhar_no'];
        $experience = $_POST['experience'];
        $password = $_POST['password'];
        $category_id = $_POST['category_id'];
        $location_id = $_POST['location_id'];

        
	 	$query = "SELECT * FROM technicians where email='$email'";
         $result =  mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if($rows>0)
		{
            
                session_start();
              $_SESSION['errors'] = "Email Already Exists..!!";                      
			  header("Location:tech_register.php");
		}
		else
		{
		 		if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) {
                     $filename =  $_FILES["pic"]["name"];
		            $target_dir = 'tech_pics/'.$filename;

		            if (file_exists($target_dir)) {
		                unlink($target_dir);
		            }

		            move_uploaded_file($_FILES['pic']['tmp_name'], $target_dir);

                    $query = "INSERT INTO technicians(name,mobile, email, address, adhar_no, experience, password, photo, category_id, location_id) ";	
                    $query .= "VALUES('$name','$mobile', '$email', '$address', '$adhar_no' , '$experience', '$password', '$target_dir', $category_id, $location_id)";
                    mysqli_query($conn, $query);

                    session_start();
                    $_SESSION['errors'] = "Registration Successfull...!!";     
                     header("Location:tech_login.php");
            }
        }

?>