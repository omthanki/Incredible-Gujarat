<?php

    include('db.php');

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
                <a class="navbar-brand" href="index 1.php"><img src="logo.png" height="120px" width="120px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index 1.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="category 1.php" class="nav-link">Places</a></li>
                        <li class="nav-item"><a href="gallery 1.php" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="contact 1.php" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="about 1.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="feedback 1.php" class="nav-link">Feedback</a></li>
                        <li class="nav-item active"><a class="nav-link"> <?php echo "Hello ".$_SESSION['username']; ?> </a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    </ul>

                </div>
      
            </div>
        </nav>
    
        <div style="background-color: gray;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div> 

            <br><br><br><br>

            <section class="ftco-section">
                <div class="container-fluid px-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                            <h2 class="mb-2" style="color: orange;">Experience The Excitement!</h2>
                        </div>
                    </div>

                    <div class="row">

                        <?php

                        if (isset($_GET['id'])){

                            $c = $_GET['id'];

                            $s = "SELECT * FROM places WHERE Category = '$c' ORDER BY Title";

                            $result = mysqli_query($con, $s);

                            if (mysqli_num_rows($result) > 0)
                            { 
                
                                while ($row = mysqli_fetch_assoc($result)) {  

                                    $i = $row['Images'];

                                    $img = "../Admin/"."$i";

                        ?>

                        <div class="col-md-3">
                            <div class="car-wrap ftco-animate">
                                
                                <div class="img d-flex align-items-end" style="background-image: url('<?php echo trim($img); ?>');">
                                    <div class="price-wrap d-flex">
                                    </div>
                                </div>
              
                                <div class="text p-4 text-center">
              
                                    <h2 class="mb-0"><a style="color: white;" href="information 1.php?i=<?php echo $row['Title']?>"><?php echo $row["Title"]; ?></a></h2>
                
                                    <span style="color: orange;"><?php echo $row['City'];?></span>
                
                                    <p class="d-flex mb-0 d-block"><a href="information 1.php?i=<?php echo $row['Title']?>" class="btn btn-black btn-outline-black mr-1">Information</a> <a href="location 1.php?t=<?php echo $row['Title'] ?>" class="btn btn-black btn-outline-black ml-1">Location</a></p>
              
                                </div>
            
                            </div>
                        </div>

                        <?php
          
                                }

                            }
                            else
                            {
                                echo "No places found for $c category.";
                            }

                        }

                        mysqli_close($con);

                        ?>
          
                    </div>
                </div>
            </section>
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