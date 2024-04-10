<?php 
session_start();
include("header.php"); 
require("admin/connection.php"); 

    // if(!isset($_SESSION['user']))
    // { 
    //     header("Locations:user_login.php");
    // }
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Post Task</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container text-center">
    <!-- <h2> Under Development...... </h2> -->

    <div class="row">
        <div class="col-sm-4 col-lg-4 mb-2">
            <div class="card p-3">
                <h3>Electrician Required </h3>
                <span>Address- Near ST Stand </span>
                <span>Location- Pandharpur </span>
                <a href="tel:9878678900" class="btn btn-primary btn-sm mt-2"> Call :
                    9878678900 </a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 mb-2">
            <div class="card p-3">
                <h3>Plumber Required </h3>
                <span>Address- Near ST ABC Chowk </span>
                <span>Location- Pune </span>
                <a href="tel:7898986789" class="btn btn-primary btn-sm mt-2"> Call :
                    7898986789 </a>
            </div>
        </div>

        <div class="col-sm-4 col-lg-4 mb-2">
            <div class="card p-3">
                <h3>Welder Required </h3>
                <span>Address- Behind HP Petrolpump </span>
                <span>Location- Solarpur </span>
                <a href="tel:9978675645" class="btn btn-primary btn-sm mt-2"> Call :
                    9978675645 </a>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5">
            <h2> Under Development...... </h2>
    </div>

</div>



 <?php include("footer.php"); ?> 