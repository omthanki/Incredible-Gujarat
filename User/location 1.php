<?php

  include ('db.php');

  session_start();

  if(!isset($_SESSION['username']))
  {
    header('location:index.php');
  }

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

        <style type="text/css">

            .image
            {
                padding-left: 400px;
                padding-top: 200px;
            }

            .image img{
                border-radius: 20px;
                margin-bottom: 120px;
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
                        <li class="nav-item active"><a href="category.php" class="nav-link">Places</a></li>
                        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
                        <li class="nav-item active"><a class="nav-link"> <?php echo "Hello ".$_SESSION['username']; ?> </a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    </ul>

                </div>
      
            </div>
        </nav>
    
        <div style="background-color: gray;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>

            <br>

            <?php

            $t = trim($_GET['t']);

            $s = "SELECT * FROM places WHERE Title = '$t' ";

            $res = mysqli_query($con, $s);

            $row = mysqli_fetch_assoc($res);

            $i = $row['Location'];

            $img = "../Admin 1/"."$i";

            ?>

            <div class="image">

                <img src="<?php echo trim($img); ?>" height="400px" width="600px"><br>

            </div>

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