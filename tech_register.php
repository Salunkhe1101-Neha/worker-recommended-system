<?php 
 session_start();
include("header.php"); 

require('admin/connection.php');
?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Technician Registration</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container p-3">
    <form class="form" action="tech_register_code.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-md-center ">
            <div class="col-lg-8 bg-light card p-3">
                <?php
                                        
                  if(isset($_SESSION['errors']))
                  { ?>
                    <div class="alert alert-danger m-2">
                        <strong> <?= $_SESSION['errors'];?> </strong>
                    </div>

                <?php unset($_SESSION['errors']); }
                    
                  ?>

                <div class="row">
                    <div class="col-lg-6 ">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputname"
                            aria-describedby="namelHelp" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6 ">
                        <label for="exampleemail1">Email</label>
                        <input type="text" name="email" class="login-input form-control" id="exampleInputPassword1"
                            placeholder="Email" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Mobile No</label>
                        <input type="number" name="mobile" class="form-control" id="exampleInputPassword1"
                            placeholder="Number" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1"> Address </label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1"
                            placeholder="Address" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1"> Aadhaar Number </label>
                        <input type="number" name="adhar_no" class="form-control" id="exampleInputPassword1"
                            placeholder="Aadhaar Number" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1"> Experience (Year) </label>
                        <input type="text" name="experience" class="form-control" id="exampleInputPassword1"
                            placeholder="Aadhaar Number" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Your Category</label>
                        <select class="form-control" name="category_id" required>
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

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Your Location</label>
                        <select class="form-control" name="location_id" required>
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

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Photo</label>
                        <input type="file" name="pic" class="login-input form-control" id="pic" placeholder="" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="login-input form-control"
                            id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                    <div class="col-lg-12 mt-4  text-center">
                        <button type="submit" class=" btn col-lg-6 btn-primary ">Submit</button>

                        <div class="ml-5 mt-2">All ready Have a account <a href="tech_login.php"
                                style="color: rgb(236, 63, 63);">Login</a> Here</div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include("footer.php"); ?>