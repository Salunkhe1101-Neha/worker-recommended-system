<?php 
session_start();
include("header.php"); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">User Login</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container   mx-auto wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-up">
    <div class="row justify-content-md-center">
            
        <div class="col-lg-6 bg-light card p-4">
        <?php              
                  if(isset($_SESSION['errors']))
                  { ?>
                    <div class="alert alert-danger m-2">
                        <strong> <?= $_SESSION['errors'];?> </strong>
                    </div>

                <?php unset($_SESSION['errors']); }?>


            <form class="form" action="user_login_code.php" method="POST" name="login">
                <label for="exampleInputEmail1">Email ID.</label>
                <input type="text"  class="form-control mt-2 mb-1" name="email"  placeholder="Mobile No." required>
             
                <div class="form-group mt-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="login-input form-control mt-2 mb-1" name="password"
                         placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-primary ml-5 mt-4 col-lg-12">Submit</button>
             
                <div class="ml-3 mt-2" style="color:rgb(7, 46, 7);">
                    <p class="link">Don't have an account? <a href="user_register.php">Registration Now</a></p>
                </div>
            </form>
        </div>
    </div>
</div>



 <?php include("footer.php"); ?> 