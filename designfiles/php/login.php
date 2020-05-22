<?php 
session_start();
require 'config.php' 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> Login </h2>
		</div>

		<br><br>	

		<form class="form-horizontal" action="login.php" method="post">

			<div class="form-group">
				<label for="username">Username :   </label>
					<input type="text" name="username" required>
			</div>

			<div class="form-group">
				<label for="password">Password : </label>
				<input type="password" name="password_1" required>
			</div>
    			<div class="submitbutton">
				<button type="submit" name="login_user"> LOGIN </button>
  			</div>
<br><br><br><br><br><br><br><br>
  			<div>
    		
				<p><b>Not a User? </b> <a href="registration.php"><b> Register here  </b></a></p>
  			</div>

		</form>

		<?php

		if(isset($_POST['login_user'])){

			$username = $_POST['username'];
			//$_SESSION['user'] = $usern;
			$password_1 = $_POST['password_1'];
			$password = md5($password_1);



			//sql injection
			$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";


			$query_run = mysqli_query($con,$query);

			if(mysqli_num_rows($query_run) > 0){
				//valid user
				$_SESSION['username'] = $username;
				header('location:welcomepage.php');
			}
			else{
				//invalid user
				echo '<script type="text/javascript"> alert("User not registered! Please create your account to login") </script>';
			}
		}




		?>
	</div>

</body>
</html>