
<?php include("header.php"); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container text-center py-5">
      <h1 class="display-3 text-white mb-4 animated slideInDown">Citizan Login</h1>
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

            
             
  <!-- Login -->
  <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <p class="fs-5 fw-bold text-primary">Login</p>
    <h1 class="display-5 mb-5">Citizen/User Login</h1>
</div>
  <div class="container bg-light mt-5 py-5 mx-auto wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-up">
    <div class="row justify-content-md-center">
     
      <div class="col-2">
        
      </div>
      <div class="col-md-auto">
        <form>
          
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control mt-2 mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 

          <div class="form-group mt-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control mt-2 mb-1" id="exampleInputPassword1" placeholder="Password">
          </div>
 

          <div class="form-check">

           
           + <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary ml-5 mt-4">Submit</button>

          <div class="ml-3 mt-2" style="color:rgb(7, 46, 7);">New Citizan/user <a href="registercitizen.php" style="color: red;">Register</a> Here</div>
        
 
        </form>
      </div>
      <div class="col-2">
      
      </div>
    
    </div>
  </div>

   <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">Our Office</h4>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Pandharpur. 423304</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>8080543677</p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>fsa@gmail.com</p>
              <div class="d-flex pt-2">
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">Services</h4>
              <a class="btn btn-link" href="">Landscaping</a>
              <a class="btn btn-link" href="">Pruning plants</a>
              <a class="btn btn-link" href="">Urban Gardening</a>
              <a class="btn btn-link" href="">Garden Maintenance</a>
              <a class="btn btn-link" href="">Green Technology</a>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">Quick Links</h4>
              <a class="btn btn-link" href="">About Us</a>
              <a class="btn btn-link" href="">Contact Us</a>
              <a class="btn btn-link" href="">Our Services</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
              <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-4">Newsletter</h4>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative w-100">
                  <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                  <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
              </div>
          </div>
      </div>
  </div>
</div>
<?php include("footer.php"); ?>