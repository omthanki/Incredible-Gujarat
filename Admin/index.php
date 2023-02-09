<?php

    session_start();

    if(!isset($_SESSION['username']))
    {
       header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <link rel="icon" type="image/icon type" href="logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="logo.png" height="120px" width="120px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="admin.php" class="nav-link">Admins</a></li>
              <li class="nav-item"><a href="user.php" class="nav-link">Users</a></li>
              <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
              <li class="nav-item"><a href="places.php" class="nav-link">Places</a></li>
              <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
              <li class="nav-item"><a href="photos.php" class="nav-link">Photos</a></li>
              <li class="nav-item"><a href="comments.php" class="nav-link">Comments</a></li>
              <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
              <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('https://i.pinimg.com/originals/e3/68/f3/e368f3effc7257a50c2e46c5efbdbf58.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text">
              

                <h1 class="mb-10" style="font-size: 40px; padding-top: 5px;">Experience The Excitement!</h1>
                <p style="font-size: 18px;">Gujarat is a state on the western coast of India with a coastline of 1600km. It is the 5th largest Indian state by area and the 9th largest state by population.<br>Gujarat is famous for its traditional clothing, food and natural landscape. <b>Asiatic Lions</b>, <b>Rann of Kutch (White Desert)</b> colourful handicrafts, festival and culture are some of the things that make Gujarat famous.</p>
               
                    <div class="heading-title ml-5">
                        
                    </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>



    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading"></span>
            <h2 class="mb-2">Our Services</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-customer-support"></span></div>
                    <h3 class="heading mb-0 pl-3">24/7 Service</h3>
                </div>
                <p>Our Website Provide You 24/7 Services You can use Website at any time</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-route"></span></div>
                    <h3 class="heading mb-0 pl-3">Lots of Places</h3>
                </div>
                <p>Our Website Provide You A Lot's off Places That Can Help you to see Wonderfull Places</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-online-booking"></span></div>
                    <h3 class="heading mb-0 pl-3">Nearest Location</h3>
                </div>
                <p>Our Website Provide You Nearest Places So that You Can Easily Find Nearest Facilitys </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon"><span class="flaticon-rent"></span></div>
                    <h3 class="heading mb-0 pl-3">Huge Source Of Information</h3>
                </div>
                <p>Our Website Provide You A Very Huge Sourse Of Information in One Website</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

     <footer class="ftco-footer ftco-bg-dark ftco-section">
     
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <a href="https://colorlib.com" target="_blank">INCREDIBLE GUJARAT(GPP)</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>