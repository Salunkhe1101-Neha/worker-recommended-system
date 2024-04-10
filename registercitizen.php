<?php include("header.php"); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container text-center py-5">
      <h1 class="display-3 text-white mb-4 animated slideInDown">Citizan Registration</h1>
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

            
             
<div class="container bg-light mt-5 py-5">
    <div class="row justify-content-md-center">
      <div class="col-2">
        
      </div>
      <div class="col-md-auto">
        <form>
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputname" aria-describedby="namelHelp" placeholder="Enter Name" style="width: 150%;">
          <!-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

          <div class="form-group mt-4">
            <label for="exampleemail1">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" style="width: 150%;" placeholder="Email">
            <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        </div>


          <div class="form-group mt-4">
            <label for="exampleInputPassword1">Mobile No</label>
            <input type="number" class="form-control" style="width: 150%;" id="exampleInputPassword1" placeholder="Number">
          </div>


          <div class="form-group mt-4">
            <label for="exampleInputPassword1">Generate Username</label>
            <input type="text" class="form-control" style="width: 150%;" id="exampleInputPassword1" placeholder="Username">
          </div>


          <div class="form-group mt-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" style="width: 150%;" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="form-group mt-4">
            <label for="exampleInputPassword1">Your Category</label>
            <input type="text" class="form-control" style="width: 150%;" id="exampleInputPassword1" placeholder="eg. Plumber, Electrician, mechanical">
          </div>
 

         
          <button type="submit" class="btn btn-primary ml-5 mt-4 pl-5 pr-5">Submit</button>

          <div class="ml-5 mt-2">All ready Have a account <a href="logincitizan.php" style="color: rgb(236, 63, 63);">Login</a> Here</div>
        
 
        </form>
      </div>
      <div class="col-2">
      
      </div>
    
    </div>
  </div>

  <?php include("footer.php"); ?>