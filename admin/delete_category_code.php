<?php 
	
			require("connection.php");	

			$delete_id = $_GET['delete_id'];

			$query = "DELETE FROM categories WHERE category_id = $delete_id";
			$result= mysqli_query($conn, $query);

			header("Location:category_list.php");


?>