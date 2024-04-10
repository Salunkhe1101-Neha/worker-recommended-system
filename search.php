<?php 

session_start();
require("admin/connection.php");
include("header.php"); 


?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Search Here</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-fluid mb-5">
    <div class="container mb-5">
        <div class="text-center mx-auto wow mb-3 " data-wow-delay="0.1s">
            <h2 class=" mx-auto wow fadeInUp">
                Searching Technician Services near your area? </h2>
        </div>
        <form action="search_list.php" method="GET">
            <div class="row  justify-content-md-center mt-5" >
            <div class="col-lg-2"></div>
                <div class="col-lg-3 mb-3">
                  
                    <select class="form-control" name="category_id">
                    <option>Select Service</option>
                        <?php 
                    $query = "SELECT * FROM categories";
                    $category= mysqli_query($conn, $query);    
                    while($row = mysqli_fetch_assoc($category))
                    { ?>

                        <option value="<?= $row['category_id'];?>"> <?= $row['title'];?> </option>";
                        <?Php   }
    ?>
                    </select>
                </div>
                <div class="col-lg-3 mb-3">
                 
                    <select class="form-control" name="location_id">
                    <option>Select Location</option>
                        <?php 
                $query = "SELECT * FROM locations";
                $location= mysqli_query($conn, $query);    
                while($row = mysqli_fetch_assoc($location))
                { ?>
                        <option value="<?= $row['location_id'];?>"> <?= $row['name'];?> </option>";
                        <?Php   }
              ?>
                        ?>
                    </select>
                </div>

                <div class="col-lg-4 mb-3">
          
                    <button type="submit" class="btn col-lg-6 btn-primary" width="100%"> Search </button>
                </div>

               
            </div>
    </div>
</div>
</div>

<?php include("footer.php"); ?>