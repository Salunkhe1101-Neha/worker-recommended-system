<?php include("header.php");?>

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category List</h1>

	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="add_category.php" class="btn btn-primary float-right"> + Add </a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th>Category Title</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						<?php 

						require("connection.php");	

						$query = "SELECT * FROM categories";
						$result= mysqli_query($conn, $query);

						$count = 1;

						while($row = mysqli_fetch_assoc($result))
						{

                        ?>
							<tr>
								<td><?= $count; ?></td>
								<td><?= $row['title'];?> </td>
								<td>
									<a href="edit_category.php?edit_id=<?= $row['category_id'];?>" class="btn btn-success btn-sm">Edit</a>
									<a href="delete_category_code.php?delete_id=<?= $row['category_id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want Delete ?')">Delete</a>
								</td>
							</tr>

				  <?php
				  		$count++;
				  	 }  ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php");?>