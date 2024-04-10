<?php

	    require("connection.php");

		$title = $_POST['title'];

		$query = "INSERT INTO categories(title) VALUES('$title')";

		mysqli_query($conn, $query);

		header("Location:category_list.php");

?>