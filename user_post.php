<?php 
session_start();
include("header.php"); 
require("admin/connection.php"); 

    if(!isset($_SESSION['user']))
    { 
        header("Locations:user_login.php");
    }
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Advertise Post</h1>
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
    <h2> Under Development...... </h2>

</div>



 <?php include("footer.php"); ?> 