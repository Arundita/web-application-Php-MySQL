<?php

session_start();
require 'config.php'

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
<title>Welcome Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> Welcome Home </h2>
		</div>	
		<br>

		<h3>Hello 

			<?php echo $_SESSION['username'] ?>

		!</h3>

<br>
    		<form class="myform" action="homepage.php" method="post">


    		<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> First Name : </label>
				
				<input type="text" name="fname"  required placeholder="Your firstname..">
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="lname"> Last Name: </label>
				
				<input type="text" name="lname"  required placeholder="Your lastname..">
			
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="street">Street Name : </label>
				
				<input type="text" name="street" required placeholder="Street Name..">
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="city">City Name: </label>
				
				<input type="text" name="city"  required placeholder="City..">
				
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-3" for="state">State Name: </label>
				
				<input type="text" name="state"  required placeholder="State..">
				
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-3" for="zipcode">Zipcode: </label>
				
				<input type="text" name="zipcode"  required placeholder="Zipcode..">
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="gender">Gender: </label>
				<input class="radiobtn" type="radio" id="male" name="gender" value="m">
  					<label for="male">Male</label>
 				<input class="radiobtn" type="radio" id="female" name="gender" value="f">
  					<label for="female">Female</label>
				
			</div>
			

			<div class="form-group">
				<label class="control-label col-sm-3" for="ms">Marital Status:</label>
				<input class="radiobtn" type="radio" id="m" name="ms" value="m" checked>
  					<label for="m">Married</label>
				<input class="radiobtn" type="radio" id="s" name="ms" value="s">
  					<label for="male">Single</label>
 				<input class="radiobtn" type="radio" id="w" name="ms" value="w">
  					<label for="female">Widow</label>
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="ct">Customer Type:</label>
				<input class="radiobtn" type="radio" id="a" name="ct" value="a" checked>
  					<label for="male">Automobile Insurance </label>
 				<input class="radiobtn" type="radio" id="h" name="ct" value="h">
  					<label for="female">Home Insurance </label>
				
			

			<div class="form-group">
				<label class="control-label col-sm-3" for="eu">Are you an employee of WDS? :</label>
				<input class="radiobtn" type="radio" id="a" name="eu" value="y" >
  					<label for="y">Yes I am an employee</label>
 				<input class="radiobtn" type="radio" id="h" name="eu" value="n" checked>
  					<label for="n">No I am not an employee</label>
				
			</div>
			
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="username">Username:</label>
				
					<input type="text" name="username"  required placeholder="Your username..">
			</div>

			<br>

			<div class="form-group">
    		<label class="control-label col-sm-3"> </label>
  			</div>
  				<button name="submit_user_details" type="submit"> SUBMIT </button>
		
				
  			</form>

  			<?php

  				if(isset($_POST['submit_user_details'])){

  					$fname = $_POST['fname'];
  					$lname = $_POST['lname'];
  					$street = $_POST['street'];
  					$city = $_POST['city'];
  					$state = $_POST['state'];
  					$zipcode = $_POST['zipcode'];
  					$gender = $_POST['gender'];
  					$ms = $_POST['ms'];
  					$ct = $_POST['ct'];
  					$username = $_POST['username'];
  					$eu = $_POST['eu'];

  					$query = "INSERT INTO customer VALUES (default,'$fname','$lname','$street','$city','$state','$zipcode','$gender','$ms','$ct','$username','$eu')";

  					$query_run = mysqli_query($con,$query);

  					if($query_run){
						
						header('location:select_insurance.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}

  				}



  			?>
	</div>

</body>
</html>