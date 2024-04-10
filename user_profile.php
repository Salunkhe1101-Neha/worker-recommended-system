<?php 
session_start();
include("header.php"); 
require("admin/connection.php"); 

    if(!isset($_SESSION['user']))
    { 
        header("Locations:user_login.php");
    }


    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE user_id = " . $user_id;
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

    $name  =  $row['name'];
    $mobile=  $row['mobile'];
    $email=  $row['email'];
	$address =  $row['address'];
    $photo =  $row['photo'];
	$location_id =  $row['location_id'];

	$query = "SELECT * FROM locations WHERE location_id = " . $location_id;
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $location = $row['name'];
    
?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">My Profile</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container p-3">
        <div class="row justify-content-md-center ">
            <div class="col-lg-10 text-end mb-3">
            <a href="user_update_profile.php" class="text-end btn btn-primary"> Update Profile</a>
            </div>    

            <div class="col-lg-10 bg-light card p-3">
           
                <?php
                                        
                    if(isset($_SESSION['errors']))
                    { ?>
                        <div class="alert alert-danger m-2">
                            <strong> <?= $_SESSION['errors'];?> </strong>
                        </div>

                        <?php 
                            unset($_SESSION['errors']);
                    }
                    
                ?>
                
                <div class="row">
                  <div class="col-lg-4">
                    <img src=" <?= $photo;?>" alt="" class="img-fluid img-thumbnail p-2 img-circle" width="100%">
                </div>
                  <div class="col-lg-8 mt-3">
                     <div class="row">
                     <div class="col-lg-6 mb-3">
                        <h5>Name : <?= $name;?></h5>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <h5>Mobile : <?= $mobile;?></h5>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <h5>Email : <?= $email;?></h5>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <h5>Address : <?= $address;?></h5>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <h5>Location : <?= $location;?></h5>
                    </div>

                     </div>
                  </div>
                </div>
            </div>
        </div>
</div>



 <?php include("footer.php"); ?> 