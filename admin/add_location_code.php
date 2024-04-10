<?php

	    require("connection.php");

		$name = $_POST['name'];

		$query = "INSERT INTO locations(name) VALUES('$name')";

		mysqli_query($conn, $query);

		header("Location:location_list.php");

?>