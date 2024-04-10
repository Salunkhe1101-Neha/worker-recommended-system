<?php 

	include("header.php");

	require("connection.php");	

	$edit_id = $_GET['edit_id'];

	$query = "SELECT * FROM categories WHERE category_id=$edit_id";
	$result= mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);

	$title = $row['title'];



?>


<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Category</h1>

	</div>

	<div class="card shadow mb-4">
		
		<div class="card-body">
			<form action="edit_category_code.php" method="POST">
				<input type="text" name="edit_id" value="<?= $edit_id;?>">
				<div class="mb-3 mt-3">
					<label for="" class="form-label">Category Title:</label>
					<input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="<?= $title;?>">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

<?php include("footer.php");?>