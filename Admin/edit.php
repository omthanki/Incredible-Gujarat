<?php

	include('db.php');

	session_start();

    if(!isset($_SESSION['username']))
    {
       header('location:login.php');
    }

	if(isset($_POST['edit']))
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$desc = $_POST['desc'];
		$city = $_POST['city'];

		$u = "UPDATE places SET Title='$title', Category='$category', Description='$desc', City='$city' WHERE Place_id='$id' ";

		$r = mysqli_query($con, $u);

		if ($r) {
			echo '<script>alert("Place Edited Succesfully..!")</script>';
		}
		else
		{
			echo '<script>alert("Something went wrong.")</script>';
		}
			
		mysqli_close($con);
		
		header("Location: places.php");
	}
?>