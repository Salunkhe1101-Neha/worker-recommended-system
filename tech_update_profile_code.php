<?php
	    require("admin/connection.php");

        $technician_id = $_POST['technician_id'];
		$name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $adhar_no = $_POST['adhar_no'];
        $experience = $_POST['experience'];
        $password = $_POST['password'];
        $category_id = $_POST['category_id'];
        $location_id = $_POST['location_id'];
		           
        $query = "UPDATE technicians SET name = '$name', mobile= '$mobile', email = '$email', address = '$address', ";
        $query .= "adhar_no= '$adhar_no' , experience= '$experience', password = '$password', category_id = $category_id, location_id = $location_id ";
        $query .= "WHERE technician_id = ".$technician_id;
        mysqli_query($conn, $query);

        if (isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])) 
        {
                     $filename =  $_FILES["pic"]["name"];
		            $target_dir = 'tech_pics/'.$filename;

		            if (file_exists($target_dir)) {
		                unlink($target_dir);
		            }
                    
                    move_uploaded_file($_FILES['pic']['tmp_name'], $target_dir);

                    $query = "UPDATE technicians SET photo = '$target_dir' WHERE technician_id = ".$technician_id;
                    mysqli_query($conn, $query);

        }

        session_start();
        $_SESSION['errors'] = "Profile Updated...!!";     
        header("Location:tech_profile.php");
        
        

?>