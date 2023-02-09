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
		<link rel="stylesheet" type="text/css" href="table.css">
		<link rel="stylesheet" type="text/css" href="form.css">
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
              <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
              <li class="nav-item"><a href="places.php" class="nav-link">Places</a></li>
              <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
              <li class="nav-item"><a href="photos.php" class="nav-link">Photos</a></li>
              <li class="nav-item active"><a href="comments.php" class="nav-link">Comments</a></li>
              <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
              <li class="nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="hero-wrap" style="background-color: gray;" data-stellar-background-ratio="0.5">

      <br><br><br><br>

		<?php

			$qry = "SELECT * FROM places_comment";
	        $b = mysqli_query($con, $qry);

	        if (mysqli_num_rows($b) > 0)
	        {
	            echo "<br><br>";
	            echo "<table>
	                    <tr>
	                        <th>Sr no.</th>
	                        <th>User Email</th>
	                        <th>Place</th>
	                        <th>Message</th>
	                        <th>Status</th>
	                        <th>Hide</th>
	                        <th>Delete</th>
	                    </tr>";

	            $i=1;
	            while($row = mysqli_fetch_assoc($b)) {
	                echo "<tr>";
	                echo    "<td>" . $i . "</td>" .
	                        "<td>" . $row["User_id"] . "</td>" .
	                        "<td>" . $row["Place_name"] . "</td>" .
	                        "<td>" . $row["Message"] . "</td>" .
	                        "<td>" . $row["Status"] . "</td>" ; ?>
	                        <td> <a href="comments.php?commentid= <?php echo $row["ID"] ?> " onclick='return hidecomment();'>Hide</a> </td>
	                        <td> <a href="comments.php?comment_id= <?php echo $row["ID"] ?> " onclick='return deletecomment();'>Delete</a> </td>
	                <?php
	                echo "</tr>";

	                $i++;
	            }         
	            echo "</table>";
	        } else {            
	    	    echo '<script>alert("No comments found.")</script>';
	    	}
        ?>

    </div>

   <script type="text/javascript">
   	
   		function hidecomment()
   		{
   			return confirm("Are you sure you want to hide this comment?");
   		}

   		function deletecomment()
   		{
   			return confirm("Are you sure you want to delete this comment?");
   		}

   </script>

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

	if (isset($_GET['comment_id']))
	{
		$i1 = trim($_GET['comment_id']);

		echo "$i1";
		
		$d = "DELETE FROM places_comment WHERE ID = '$i1' ";

		$result = mysqli_query($con, $d);

		if($result){
			echo '<script>alert("Comment deleted successfully...!")</script>';
		}
		else
		{
			echo '<script>alert("Something went wrong.")</script>';
		}
	}


	if(isset($_GET['commentid']))
	{
		$i2 = trim($_GET['commentid']);

		$h = "Hidden";

		$u = "UPDATE places_comment SET Status = '$h' WHERE ID = '$i2' ";

		$r = mysqli_query($con, $u);

		if($r){
			echo '<script>alert("Comment is hidden successfully...!")</script>';
		}
		else
		{
			echo '<script>alert("Something went wrong.")</script>';
		}
	}

	mysqli_close($con);
?>