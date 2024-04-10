<?php 

	include("header.php");

	require("connection.php");	

	$edit_id = $_GET['edit_id'];

	$query = "SELECT * FROM locations WHERE location_id=$edit_id";
	$result= mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);

	$name = $row['name'];



?>


<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Location</h1>

	</div>

	<div class="card shadow mb-4">
		
		<div class="card-body">
			<form action="edit_location_code.php" method="POST">
				<input type="text" name="edit_id" value="<?= $edit_id;?>">
				<div class="mb-3 mt-3">
					<label for="" class="form-label">Location Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?= $name;?>">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

<?php include("footer.php");?>