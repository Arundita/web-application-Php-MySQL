<?php require 'config.php' ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">
		<h2>Create Account</h2>
	</div>

<div class="sub-container">

<div class="column">
		<form class="form-horizontal" action="registration.php" method="post">	

  			<br><br>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="username">Username:</label>
					<input type="text" name="username" required placeholder="Your username..">
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="password">Password:</label>
				<input type="password" name="password_1" required placeholder="Your password..">
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="password">Confirm password:</label>
				<input type="password" name="password_2" required placeholder="Confirm your password..">
			</div>

			<div class="submitbutton">
				<button type="submit" name="reg_user"> SIGN UP </button>
			</div>
			
			<br><br><br><br><br><br><br><br>
  			<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
				<p><b>Already a User?</b> <a href="login.php"><b>Log In</b></a></p>
			</div>
  			</div>

		</form>

		<?php

		if(isset($_POST['reg_user'])){

			$username = $_POST['username'];
			$password_1 = $_POST['password_1'];
			$password_2 = $_POST['password_2'];

			if($password_1 == $password_2){

				$query = "SELECT * FROM user WHERE username = '$username'";

				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run) > 0){
					echo '<script type="text/javascript"> alert("Username already exist! try another username") </script>';
				}
				

				else{

					$password = md5($password_1);
					$query = "INSERT INTO user (username, password) VALUES(?,?);";

					$stmt = mysqli_stmt_init($con);
					if(!mysqli_stmt_prepare($stmt, $query)){
						echo "sql error";
					} else{
						mysqli_stmt_bind_param($stmt, "ss", $username, $password);
						mysqli_stmt_execute($stmt);
						//echo '<script type="text/javascript"> alert("User registered successfully! Go to login page to login") </script>';

						header('location:login.php');

					}






				/*	$query_run = mysqli_query($con,$query);

					if($query_run){
						echo '<script type="text/javascript"> alert("User registered successfully! Go to login page to login") </script>';
						header('location:login.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}*/

				}

			}

			else{
				echo '<script type="text/javascript"> alert("Passwords should be same") </script>';
			}
		}

		?>

	</div>
</div>
</body>
</html>