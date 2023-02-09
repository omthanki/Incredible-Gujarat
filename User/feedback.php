<?php

    include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
  
    <head>
    
        <title>Incredible Gujarat</title>
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
            <link rel="stylesheet" type="text/css" href="form.css">

            <style type="text/css">

            img{
                border-radius: 20px;
            }

            img:hover{
                transform: scale(1.5, 1.5);
                transition: 0.01s transform;
                cursor: pointer;
                border-radius: 20px;
            }

        </style>
  
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
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="category.php" class="nav-link">Places</a></li>
                        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item active"><a href="feedback.php" class="nav-link">Feedback</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>
                    </ul>
	      
                </div>
            </div>
        </nav>
    
        <div class="hero-wrap" style="background-color: gray;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>

            <br><br><br><br><br>
      
            <div class="header">
                <h2>Feedback</h2>
            </div>

      
            <form method="post" action="">
                
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>
        
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div><br>
        
                <div class="input-group">
                    <label>Message</label>
                    <textarea name="message" rows="5" cols="30" required></textarea>
                </div>
    
                <div class="input-group">
                    <button type="submit" class="btn" name="feedback">Submit</button>
                </div>
      
            </form>

        </div>
  
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

<?php

  if(isset($_POST['feedback']))
  {
      $name = $_POST['name'];
      $message = $_POST['message'];

      if(ctype_digit($name)){
          echo '<script>alert("Name should not contain digits.")</script>';
      }
      elseif (ctype_punct($name))
      {
          echo '<script>alert("Name should not contain symbols.")</script>';
      }
      elseif (ctype_digit($message))
      {
          echo '<script>alert("Message should not contain digits.")</script>';
      }
      elseif(ctype_punct($message))
      {
          echo '<script>alert("Message should not contain symbols.")</script>'; 
      }
      else
      {
          echo '<script>alert("You cannot give feedback if you are not loged in.\nYou have to login first.")</script>';
      }
  }

?>