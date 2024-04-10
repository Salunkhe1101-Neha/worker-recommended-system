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
    $password =  $row['password'];

	
?>




<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Update Profile</h1>
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
    <form class="form" action="user_update_profile_code.php" method="post" enctype="multipart/form-data">
     
    <input type="hidden" name="user_id" value="<?= $user_id;?>">

        <div class="row justify-content-md-center ">
            <div class="col-lg-8 bg-light card p-3">
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
                    <div class="col-lg-6 ">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputname"
                            aria-describedby="namelHelp" placeholder="Enter Name" value="<?= $name;?>" required>
                    </div>
                    <div class="col-lg-6 ">
                        <label for="exampleemail1">Email</label>
                        <input type="text" name="email" class="login-input form-control" id="exampleInputPassword1"
                            placeholder="Email" value="<?= $email;?>" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Mobile No</label>
                        <input type="number" name="mobile" class="form-control" id="exampleInputPassword1"
                            placeholder="Number" value="<?= $mobile;?>"  required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1"> Address </label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1"
                            placeholder="Address" value="<?= $address;?>" required>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Your Location</label>
                        <select class="form-control" name="location_id" required>
                            <?php 
                    $query = "SELECT * FROM locations";
                    $location= mysqli_query($conn, $query);    
                    while($row=mysqli_fetch_assoc($location))
				    { ?>
							<option value="<?php echo $row['location_id'] ;?>" <?php echo $row['location_id'] == $location_id ? 'selected' : '' ;?>> <?php echo $row['name'] ;?> </option>
			    <?php 	}
                    ?>
                        </select>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Photo</label>
                        <input type="file" name="pic" class="login-input form-control" id="pic" placeholder="" >
                    </div>

                    <div class="col-lg-6 mt-4">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="login-input form-control"
                            id="exampleInputPassword1" placeholder="Password" value="<?= $password;?>" required>
                    </div>

                    <div class="col-lg-12 mt-4  text-center">
                        <button type="submit" class=" btn col-lg-6 btn-primary ">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



 <?php include("footer.php"); ?> 