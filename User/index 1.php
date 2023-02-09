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

            .hero-wrap
            {
                background-image: url('https://i.pinimg.com/originals/e3/68/f3/e368f3effc7257a50c2e46c5efbdbf58.jpg');
                animation: slider 12s infinite linear;
            }

            @keyframes slider
            {
                18%{ background-image: url('https://i.pinimg.com/originals/e3/68/f3/e368f3effc7257a50c2e46c5efbdbf58.jpg'); }
                36%{ background-image: url('https://free4kwallpapers.com/uploads/originals/2019/07/29/crimson-sky-over-people-in-beach-at-sunset-wallpaper.jpg'); }
                54%{ background-image: url('https://wallpapercave.com/wp/wp5281238.jpg'); }
                72%{ background-image: url('https://www.trawell.in/admin/images/upload/894169759Somnath_Somnath_Temple_Main.jpg'); }
                90%{ background-image: url('https://farm8.staticflickr.com/7363/16434210791_1a48819cd4.jpg');}
            }

            .searchbar
            {
                margin-left: 820px;
                margin-top: 200px;
                width: 290px;
            }

            .placelist ul
            {
                background-color: #eee;
                cursor: pointer;
                width: 200px;
            }

            .placelist li:hover{
                background-color: blue;
                color: #fff;
            }

            .placelist li
            {
                padding: 12px;
            }

            button
            {
                border-radius: 20px;
                border-color: red;
                background-color: blue;
                color: #fff;
            }

            button:hover
            {
                color: blue;
                background-color: #fff;
                cursor: pointer;
            }

            input
            {
                border-radius: 20px;
                border-color: blue;
            }

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
                        <li class="nav-item active"><a href="index 1.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="category 1.php" class="nav-link">Places</a></li>
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
    
        <div class="hero-wrap" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="searchbar">
                        
                            <form method="post" action="searchresult.php">
                            
                                <input type="text" name="place" id="place" placeholder="Search place...">  
                                <button name="search">Search</button>
             
                                <div id="placelist" class="placelist"></div>
              
                            </form>

                        </div>
         
                    </div>
                </div>
            </div>

            <script type="text/javascript">
  
                $ (document).ready(function() {

                    $('#place').keyup(function() {

                        var query = $(this).val();

                        if(query != '')
                        {
                            $.ajax({
                                url:"search 1.php",
                                method:"POST",
                                data:{query:query},
                                success:function(data)
                                {
                                    $('#placelist').fadeIn();
                                    $('#placelist').html(data);
                                }
                            });
                        }
                        else
                        {
                            $('#placelist').fadeOut();
                            $('#placelist').html("");
                        }
                    });

                    $(document).on('click', 'li', function() {
                        $('#place').val($(this).text());
                        $('#placelist').fadeOut();
                    });

                });

            </script>

            <div class="container">
                <div class="row no-gutters slider-text justify-content-start align-items-center">
                    <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                        <div class="text">
                            <h1 class="mb-10" style="font-size: 50px; padding-top: 5px;">Experience The Excitement!</h1>
              
                            <p style="font-size: 18px;">Gujarat is a state on the western coast of India with a coastline of 1600km. It is the 5th largest Indian state by area and the 9th largest state by population.<br>Gujarat is famous for its traditional clothing, food and natural landscape. <b>Asiatic Lions</b>, <b>Rann of Kutch (White Desert)</b> colourful handicrafts, festival and culture are some of the things that make Gujarat famous.</p>
             
                            <div class="heading-title ml-5">
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

        <section class="ftco-section">
            <div class="container-fluid px-4">

                <h1 style="color: blue;">Special Attractions</h1><br>

                <div class="row">

                    <?php

                    $s = "SELECT * FROM places WHERE Category = 'Special Attractions' ORDER BY Title";

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
                                <h2 class="mb-0"><a style="color: blue;" href="information 1.php?i=<?php echo $row['Title']?>"><?php echo $row["Title"]; ?></a></h2>
                            </div>
                        </div>
                    </div>
          
                    <?php
          
                        }

                    }

                    mysqli_close($con);

                    ?>

        
                </div>
            </div>
        </section>

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

                                <p>Our Website Provide You A Lot's off Places That Can Help you to see Wonderful Places</p>
              
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

                                <p>Our Website Provide You Nearest Places So that You Can Easily Find Nearest Facilities</p>
              
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
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with by <a href="https://colorlib.com" target="_blank">INCREDIBLE GUJARAT(GPP)</a></p>    
            </div>

        </footer>
  
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