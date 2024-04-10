<?php 
	
			require("connection.php");	

			$delete_id = $_GET['delete_id'];

			$query = "DELETE FROM locations WHERE location_id = $delete_id";
			$result= mysqli_query($conn, $query);

			header("Location:location_list.php");


?>