<?php include("header.php");?>

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Add Location</h1>

	</div>

	<div class="card shadow mb-4">
		
		<div class="card-body">
			<form action="add_location_code.php" method="POST">
				<div class="mb-3 mt-3">
					<label for="" class="form-label">Location Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter Title" name="name">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

<?php include("footer.php");?>