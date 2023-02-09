<?php

	session_start();

	include('db.php');
?>

<!DOCTYPE html>
<html>
	
    <head>
		<title>User Login and Registration</title>
    	<link rel="icon" type="image/icon type" href="logo.png">

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

		<style type="text/css">

			.logo img{
				margin-top: 50px;
				margin-left: 100px;
			}

			.logo img:hover{
				transform: scale(1.5, 1.5);
                transition: 0.01s transform;
                cursor: pointer;
			}
			
		</style>
	
    </head>
	
	<body>

		<div class="logo">

			<a href="index.php"><img src="logo.png" width="120px" height="120px"></a>

		</div>

		<div class="container">
            <div class="login-box">
				<div class="row">
					
                    <div class="col-mid-6 login-left">
                        
						<h2>Login Here</h2>
                        
						<form action="" method="post">
			
                            <div class="form-group">
								<label>Email ID</label>
								<input type="email" name="email" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>

							<button type="submit" class="btn btn-primary" name="login_user"> Login </button>
						
                        </form>
					
                    </div>

					<div class="col-mid-6 login-right">
					
                        <h2>Register Here</h2>
						
                        <form action="" method="post">

							<div class="form-group">
						  	  <label>First name</label>
						  	  <input type="text" name="fname" class="form-control" required>
						  	</div>

						    <div class="form-group">
						      <label>Last name</label>
						      <input type="text" name="lname" class="form-control" required>
						    </div>

						    <div class="form-group">
						      <label>Gender <br></label>
						    </div>
						    <input type="radio" id="male" name="gender" value="male" checked/>
						    <label for="male">Male</label>
						    <input type="radio" id="female" name="gender" value="female"/>
						    <label for="female">Female</label>

						    <div class="form-group">
						      <label>Birthdate</label>
						      <input type="date" name="bdate" class="form-control" min="1920-01-01" max="2020-01-01" required>
						    </div>

							<div class="form-group">
								<label>Email ID</label>
								<input type="email" name="email" class="form-control" required>
							</div>

							<div class="form-group">
						      <label>Mobile</label>
						      <input type="tel" name="mobile" class="form-control" maxlength="10" required>
						    </div>
						    
						    <div class="form-group">
						      <label>City</label>
						      <input type="text" name="city" class="form-control" required>
						    </div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>

							<button type="submit" class="btn btn-primary" name="reg_user"> Register </button>
                            
						</form>
					
                    </div>
                    
				</div>
			</div>
		</div>

	</body>

</html>

<?php

	if (isset($_POST['login_user'])) {

		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		$password1 = base64_encode($password);
		
		$s = " SELECT * from user_registration where Email_id = '$email' && Password = '$password1'";
		
		$result = mysqli_query($con, $s);
		$num = mysqli_num_rows($result);

		$row = mysqli_fetch_assoc($result);
		$name = $row['Fname'];
		
		if ($num == 1) {

			echo '<script>alert("Login Successfull...!")</script>';

			$_SESSION['useremail'] = $email;
			$_SESSION['username'] = $name;

			header('location:index 1.php');
		}
		else{
			echo '<script>alert("Invalid Email id and Password combination.")</script>';
		}
	}

	if (isset($_POST['reg_user'])) {
		
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$gender = trim($_POST['gender']);
		$bdate = trim($_POST['bdate']);
		$email = trim($_POST['email']);
		$mobile = trim($_POST['mobile']);
		$city = trim($_POST['city']);
		$password = trim($_POST['password']);
		$password1 = base64_encode($password);

		$s = "SELECT * from user_registration where Email_id = '$email' LIMIT 1";

		$result = mysqli_query($con, $s);

		$num = mysqli_num_rows($result);

		if ($num == 1) {
				echo '<script>alert("Email Already Taken.\nPlease try another Email.")</script>';
		}
		elseif (ctype_digit($fname)) {
			echo '<script>alert("First Name should not contain digits.")</script>';
		}
		elseif (ctype_digit($lname)) {
			echo '<script>alert("Last Name should not contain digits.")</script>';
		}
		elseif (ctype_punct($fname)) {
			echo '<script>alert("First Name should not contain symbols.")</script>';
		}
		elseif (ctype_punct($lname)) {
			echo '<script>alert("Last Name should not contain symbols.")</script>';
		}
		elseif (ctype_alpha($mobile)) {
			echo '<script>alert("Mobile number should not contain alphabets.")</script>';
		}
		elseif (ctype_punct($mobile)) {
			echo '<script>alert("Mobile number should not contain symbols.")</script>';
		}
		elseif (ctype_punct($city)) {
			echo '<script>alert("City name should not contain symbols.")</script>';
		}
		elseif (ctype_digit($city)) {
			echo '<script>alert("City name should not contain digits.")</script>';
		}
		elseif (strlen($password) < 8) {
			echo '<script>alert("Password must contain atleast 8 characters.")</script>';
		}
		else{
			$query = "INSERT INTO user_registration (Fname, Lname, Gender, Birthdate, Email_id, Mobile_no, City, Password, Disabled) 
	  			  VALUES('$fname', '$lname', '$gender', '$bdate', '$email', '$mobile', '$city', '$password1', 'no')";
	  			  
	  		$r=mysqli_query($con, $query);

	  		if ($r) {
	  			echo '<script>alert("Registration Successfull...!")</script>';
	  		}
		}

		$_SESSION['useremail'] = $email;

		$_SESSION['username'] = $fname;

		header('location:index 1.php');
	}

?>