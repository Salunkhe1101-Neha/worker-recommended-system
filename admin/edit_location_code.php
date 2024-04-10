<?php

	    require("connection.php");

		$edit_id = $_POST['edit_id'];
		$name = $_POST['name'];

		$query = "UPDATE locations SET name = '$name' WHERE location_id = $edit_id";

		mysqli_query($conn, $query);

		header("Location:location_list.php");

?>