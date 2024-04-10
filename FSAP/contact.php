<?php include("header.php"); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Container for contact form -->

  <div class="container" style="width: 100%;">
    <div class="row">
      <!-- 1st col Contact Info -->
      <div class="col-6 mt-5">
        <h3 class="mb-4 text-center">CONTACT INFORMATION</h3>
        <P class="mb-3">Please feel free to contact us for any queries.</P>
        
        <div class="row">
          <div class="col">
            <h6>Address:</h6>
            <p class="mb-3">Crescent The Avenue, 310/311 Opp. The Leela Hotel International, Airport Rd, Andheri East, Mumbai -
              400059, Maharashtra. Get Directions</p>
            
            <h6>CONTACT NUMBER:</h6>
            <p class="mb-3">9976456798</p>
            <h6>OFFICE TIMING:</h6>
            <p>Mon-Sat timing 10AM to 6PM</p>
          </div>
          <div class="col">
            <h6>Email: </h6>
            <p class="mb-5">support@kaamwalibais.com </p>
            <h6>SOCIAL NETWORK:</h6>
          </div>
        </div>
      </div>
      <!-- 2nd col Contact form -->

      <div class="col-6 mt-5">
        <h3 class="mb-4 text-center"> CONTACT FORM</h3>

        <div class="row">
          <div class="col">
            <form>
              <h6>Name:</h6>
              <input type="text" name="name" class="input">
              <br><br>

              <h6>Phone Number:</h6>
              <input type="number" name="number" class="input">
            </form>
          </div>


          <div class="col">
            <h6>Email:</h6>
            <input type="email" name="email" class="input">
            <br> <br>

            <h6> Subject:</h6>
            <input type="text" name="subject" class="input" >
          </div>
        </div>
         <br>
        <h6>Message:</h6>
        <input type="text" name="message"  class="input" >
      </div>

      </div>
    </div>
  </div>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Contact Us</p>
                    <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <!-- <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30411.37540737084!2d75.30109373123518!3d17.677517515325313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc4181b8db52943%3A0x1ab147f5432da578!2sPandharpur%2C%20Maharashtra%20413304!5e0!3m2!1sen!2sin!4v1669612569101!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>


  