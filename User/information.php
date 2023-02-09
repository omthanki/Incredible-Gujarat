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
        <link rel="stylesheet" type="text/css" href="table.css">
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
                        <li class="nav-item active"><a href="category.php" class="nav-link">Places</a></li>
                        <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
                        <li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div style="background-color: gray" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            
            <br><br><br><br><br>

            <?php 

            if (isset($_GET['i'])){

                $t = $_GET['i'];

                $s = "SELECT * FROM places WHERE Title = '$t'";

                $result = mysqli_query($con, $s);

                if (mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $city = $row["City"];
                }

            ?>
    
            <section class="ftco-section ftco-no-pt ftco-no-pb">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12 wrap-about py-md-5 ftco-animate">
                            <div class="heading-section mb-5 pl-md-5">
                                <h2 class="mb-4" style="color: orange;"><?php echo $row["Title"]; ?></h2>
                                <span class="subheading"><?php echo $row["City"]; ?></span><br>
                                <p style="color: white;"><?php echo $row["Description"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <?php 

            }
            else{
                echo "No information found.";
            } 
            
            ?>

            <h1 style="color: #fff; margin-left: 120px;">Photos</h1>

            <section class="ftco-section ftco-no-pt ftco-no-pb">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12 wrap-about py-md-5 ftco-animate">

                            <?php

                            $i = $row['Place_id'];

                            $sel = "SELECT * FROM places_photo WHERE Place_id = '$i' ";

                            $res = mysqli_query($con, $sel);

                            ?>

                            <div style="margin-left: 120px; width: 90%;">

                                <?php

                                if(mysqli_num_rows($res) > 0){
        
                                    while ($r = mysqli_fetch_assoc($res)) { 

                                        $img = $r['Image'];

                                        $image = "../Admin/"."$img";

                                ?>

                                <img src="<?php echo trim($image); ?>" height="200px" width="300px" style="margin: 10px;">

                                <?php

                                    }
      
                                }
                                else
                                {
                                    echo "No photos found";
                                }

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr>

            <div class="header">
                <h2>Comment</h2>
            </div>

            <form method="post" action="">

                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="input-group">
                    <label>Comment</label>
                    <textarea name="message" rows="5" cols="30" required></textarea>
                </div>

                <div class="input-group">
                    <button type="submit" class="btn" name="comment">Submit</button>
                </div>

            </form>

            <hr>

            <h1 style="color: #fff; margin-left: 25px;">Comments</h1>

            <section class="ftco-section ftco-no-pt ftco-no-pb">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-12 wrap-about py-md-5 ftco-animate">

                            <?php

                            $qry = "SELECT * FROM places_comment WHERE Status = 'Visible' AND Place_id =  '$i'";

                            $b = mysqli_query($con, $qry);

                            if (mysqli_num_rows($b) > 0)
                            {
                                echo "<table>
                                <tr>
                                    <th>Comments</th>
                                </tr>";

                                while($r2 = mysqli_fetch_assoc($b)) {

                                    echo "<tr>";
                                    echo    "<td>" . $r2["Message"] . "</td>" ;
                                    echo "</tr>";
                                }         

                                echo "</table>";
                            }
                            else
                            {            
                                echo "No comments found.";
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div style="background-color: gray;">
            <section class="ftco-section">
                <div class="container-fluid px-4">

                    <h1 style="color: #fff;">Near By Hotels</h1><br>
                    
                    <div class="row">

                      <?php

                          $s3 = "SELECT * FROM hotel WHERE City = '$city' ORDER BY Name";

                          $result2 = mysqli_query($con, $s3);

                          if (mysqli_num_rows($result2) > 0)
                          { 

                              while ($row3 = mysqli_fetch_assoc($result2)) { 

                                $i3 = $row3['Image'];

                                $img3 = "../Admin/"."$i3";

                        ?>


                        <div class="col-md-3">
                            <div class="car-wrap ftco-animate">
                                <div class="img d-flex align-items-end" style="background-image: url('<?php echo trim($img3); ?>');">
                                    <div class="price-wrap d-flex">
                  

                                    </div>
                                </div>
              
                                <div class="text p-4 text-center">
                                    <h2 class="mb-0"><a style="color: #fff;" href="hotel.php?hi=<?php echo $row3['Hotel_id'] ?>"><?php echo $row3["Name"]; ?></a></h2>
                                </div>
                            </div>
          
                        </div>
          
                        <?php
          
                                }
                            }
                            else
                            {
                                echo "No near by hotels found";
                            }

                        ?>

                    </div>
                </div>
            </section>
        </div>

        <div style="background-color: gray;">
            <section class="ftco-section">
                <div class="container-fluid px-4">

                    <h1 style="color: #fff;">Near By Places</h1><br>

                    <div class="row">

                        <?php

                        $s1 = "SELECT * FROM places WHERE city = '$city' AND Place_id != '$i' AND Category != 'Beautiful Cities' ORDER BY Title";

                        $r1 = mysqli_query($con, $s1);

                        if (mysqli_num_rows($r1) > 0)
                        { 

                            while ($row1 = mysqli_fetch_assoc($r1)) { 

                                $i1 = $row1['Images'];

                                $img1 = "../Admin/"."$i1";

                        ?>

                        <div class="col-md-3">
                            <div class="car-wrap ftco-animate">
                                <div class="img d-flex align-items-end" style="background-image: url('<?php echo trim($img1); ?>');">
                                    <div class="price-wrap d-flex">
                                    </div>
                                </div>
                                <div class="text p-4 text-center">
                                    <h2 class="mb-0"><a style="color: #fff;" href="nearbyplaces.php?i=<?php echo $row1['Title']?>"><?php echo $row1["Title"]; ?></a></h2>
                                </div>
                            </div>
                        </div>

                        <?php
          
                            }

                        }
                        else{
                            echo "No near by places found";
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

<?php

  if(isset($_POST['comment']))
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
          echo '<script>alert("Comment should not contain digits.")</script>';
      }
      elseif(ctype_punct($message))
      {
          echo '<script>alert("Comment should not contain symbols.")</script>'; 
      }
      else
      {
          echo '<script>alert("You cannot comment if you are not loged in.\nYou have to login first.")</script>';
      }
  }

?>