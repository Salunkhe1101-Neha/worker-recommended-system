<?php

	    require("connection.php");

		$edit_id = $_POST['edit_id'];
		$title = $_POST['title'];

		$query = "UPDATE categories SET title = '$title' WHERE category_id = $edit_id";

		mysqli_query($conn, $query);

		header("Location:category_list.php");

?>