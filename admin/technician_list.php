<?php include("header.php");?>

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Technicians List</h1>

	</div>

	<div class="card shadow mb-4">
		
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Sr.No.</th>
							<th> Name</th>
                            <th> Mobile</th>
                            <th> Email</th>
                            <th> Address</th>
                            <th> Adhar No</th>
                            <th> Experience</th>
							<th>Location</th>
							<th>Categroy</th>
							
						</tr>
					</thead>
					
					<tbody>
						<?php 

						require("connection.php");	

						$query = "SELECT *, (SELECT name FROM locations WHERE locations.location_id = technicians.location_id) as loc_name, ";
						$query .= " (SELECT title FROM categories WHERE categories.category_id = technicians.category_id) as cat_title ";
						$query .= " FROM technicians";
						$result= mysqli_query($conn, $query);

						$count = 1;

						while($row = mysqli_fetch_assoc($result))
						{

                        ?>
							<tr>
								<td><?= $count; ?></td>
								<td><?= $row['name'];?> </td>
                                <td><?= $row['mobile'];?> </td>
                                <td><?= $row['email'];?> </td>
                                <td><?= $row['address'];?> </td>
                                <td><?= $row['adhar_no'];?> </td>
                                <td><?= $row['experience'];?> </td>
								<td><?= $row['loc_name'];?> </td>
                                <td><?= $row['cat_title'];?> </td>
								
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