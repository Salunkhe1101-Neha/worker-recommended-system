<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Field Service Assistance</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="images/fsa_icon.ico" rel="icon"> -->
    <link href="images/fsa_icon.ico" rel="icon">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>8080543677</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>fsa@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!-- <h1 class="m-0">F.S.Assistance</h1>  -->
            <div> <img src="images/field-logo (2).jpg" style="height: 70px;"></div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="search.php" class="nav-item nav-link">Search</a>
                <a href="advertise.php" class="nav-item nav-link">Post Task</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>

                <?php
                if(isset($_SESSION['tech']))
                { ?>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $_SESSION['tech'];?></a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="tech_profile.php" class="dropdown-item">My Profile</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>

                <?php }
                else if(isset($_SESSION['user']))
                { ?>
                      <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $_SESSION['user'];?></a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="user_profile.php" class="dropdown-item">My Profile</a>
                        <a href="user_post.php" class="dropdown-item">Posts</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>

              <?php   }
    
                else{?>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SignUp/In</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="tech_login.php" class="dropdown-item">Technicians</a>
                        <a href="user_login.php" class="dropdown-item">Users</a>
                        <a href="admin/admin_login.php" class="dropdown-item">Admin</a>
                    </div>
                </div>
                
                <?php } ?>

              
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
            

        </div>
    </nav>
    <!-- Navbar End -->

   