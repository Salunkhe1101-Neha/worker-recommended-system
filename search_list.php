<?php 
session_start();
require('admin/connection.php');
include("header.php"); ?>

<?php
 				$category_id = $_GET['category_id']; 
                $location_id = $_GET['location_id']; 

	    		$query = "SELECT *, (SELECT name FROM locations WHERE locations.location_id = technicians.location_id) as loc_name, ";
                $query .= " (SELECT title FROM categories WHERE categories.category_id = technicians.category_id) as cat_title ";
                $query .= " FROM technicians WHERE category_id = '$category_id' AND category_id = '$category_id'";

             
	   			$result = mysqli_query($conn,$query);


				 ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Search Result</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">seacrh</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">

        <?php 
				 			$row= mysqli_num_rows($result);
          
          				 if ($row)
				 			{
									while($row=mysqli_fetch_assoc($result))
							{ ?>
        <div class="col-sm-3 col-lg-3">
            <div class="card p-3">

                <img src="<?= $row['photo'] ;?>" class="img-fluid mb-2" alt="">
                <h3><?= $row['name'] ;?> </h3>
                <span>Address- <?= $row['address'] ;?> </span>
                <span>Location- <?= $row['loc_name'] ;?> </span>
                <span> Category - <?= $row['cat_title'] ;?> </span>
                <span> Experience - <?= $row['experience'] ;?> </span>
                <br>
                <a href="tel:<?php echo $row['mobile'] ;?>" class="btn btn-primary btn-sm"> Call :
                    <?php echo $row['mobile'] ;?> </a>
            </div>
        </div>


        <?php 	}
			}
															else
															{ ?>
       
                <h2 class='text-center'> No Technician Found....</h2>
                <a href="search.php" class="text-center"> Search Again</a>       
       
        <?php	}
														?>


    </div>
</div>



<?php include("footer.php"); ?>