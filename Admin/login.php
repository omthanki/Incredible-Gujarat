<?php

	session_start();

	include('db.php');

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Admin Panel</title>
    	<link rel="icon" type="image/icon type" href="logo.png">
    	
		<link rel="stylesheet" type="text/css" href="form.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>

	<body>

		<h1 style="text-align: center; color: orange;"><br>Incredible Gujarat<br><br>Admin Panel</h1>

		<div class="header">
		  	<h2>Login</h2>
		  </div>
			 
		  <form method="post" action="login.php">
		  	<div class="input-group">
		  		<label>Email</label>
		  		<input type="email" name="e" required>
		  	</div>
		  	<div class="input-group">
		  		<label>Password</label>
		  		<input type="password" name="pass" required>
		  	</div>
		  	<div class="input-group">
		  		<button type="submit" class="btn" name="login_admin">Login</button>
		  	</div>
		  </form>
	</body>
</html>

<?php

	if (isset($_POST['login_admin']))
	{
		$email = trim($_POST['e']);
		$password = trim($_POST['pass']);
		
		$password1 = base64_encode($password);

		$s = " SELECT * from admin_login where Email_id = '$email' && Password = '$password1'";

		$result = mysqli_query($con, $s);

		$num = mysqli_num_rows($result);

		if ($num == 1)
		{
			$_SESSION['username'] = $email;
			header('location:index.php');
		}
		else{
			echo '<script>alert("Invalid Email Id and Password Combination")</script>';
		}
	}

?>