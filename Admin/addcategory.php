<?php

	include('db.php');

	session_start();

    if(!isset($_SESSION['username']))
    {
       header('location:login.php');
    }
?>

<!DOCTYPE html>
<html>
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
		<link rel="stylesheet" type="text/css" href="style1.css">
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
              <li class="nav-item"><a href="admin.php" class="nav-link">Admins</a></li>
              <li class="nav-item"><a href="user.php" class="nav-link">Users</a></li>
              <li class="nav-item active"><a href="categories.php" class="nav-link">Categories</a></li>
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
    
    <div class="hero-wrap" style="background-color: gray;" data-stellar-background-ratio="0.5">

      <br><br><br><br>

		<div class="header">
		  	<h2>Add Category</h2>
		  </div>
			 
		  <form method="post" action=""  enctype="multipart/form-data">
		  	<div class="input-group">
		  		<label>Name</label>
		  		<input type="text" name="cname" required>
		  	</div>
		  	<div class="input-group">
		  		<label>Image</label>
		  		<input type="file" name="img" required>
		  	</div>
		  	<div class="input-group">
		  		<button type="submit" class="btn" name="addcategory">Add</button>
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

	if(isset($_POST['addcategory']))
	{
		$name = trim($_POST['cname']);

		$img_name = $_FILES['img']['name'];
		$img_size = $_FILES['img']['size'];
		$tmp_name = $_FILES['img']['tmp_name'];
		$error = $_FILES['img']['error'];

		if ($error === 0)
		{		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");

			if(in_array($img_ex_lc, $allowed_exs))
			{
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'Images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$s = "SELECT * from category where Name = '$name' LIMIT 1";

				$result = mysqli_query($con, $s);

				$num = mysqli_num_rows($result);

				if ($num == 1) {
					echo '<script>alert("Category Already Exist")</script>';
				}
				elseif (ctype_digit($name)) {
					echo '<script>alert("Category name should not contain digits.")</script>';
				}
				elseif (ctype_punct($name)) {
					echo '<script>alert("Category name should not contain symbols.")</script>';
				}
				else{
					$query = "INSERT INTO category (Name, Image) VALUES ('$name', '$img_upload_path')";
			  			  
			  		$r = mysqli_query($con, $query);

			  		if ($r) {
			  			echo '<script>alert("Category added Successfully...!")</script>';
			  		}
			  		else{
			  			echo '<script>alert("Something went wrong.")</script>';

			  		}
			  	}

			  	header("Location: categories.php");
			}
			else
			{
				echo '<script>alert("This type of File is not allowed")</script>';
			}	
		}
	}

	mysqli_close($con);

?>