<?php
//include auth_session.php file on all user panel pages
include("authentication.php");
?>
 <?php include("header.php"); ?>

<!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
       <div class="container text-center py-5">
           <h1 class="display-3 text-white mb-4 animated slideInDown">Dashboadr</h1>
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


    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
        <?php include("footer.php"); ?>
