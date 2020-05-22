<?php

session_start();
require 'config.php'

?>
<!DOCTYPE html>
<html>
<head>
	
<title>Driver_Details</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> ENTER DRIVER DETAILS </h2>
		</div>
		<br><br>

		<form class="form-horizontal" action="Driver_Details.php" method="post">

	

  			<br><br>

			<div class="form-group">
				<label class="control-label col-sm-2" for="License_Number">Driver License Number : </label>
				<div class="col-sm-10">
				<input type="number" name="License_Number" required placeholder="Driver License Number..">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="Fname">Driver's First Name : </label>
				<div class="col-sm-10">
				<input type="text" name="Fname" required placeholder="First Name..">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="Lname">Driver's Last Name : </label>
				<div class="col-sm-10">
				<input type="text" name="Lname" required placeholder="Last Name..">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="Birthdate">Driver's Birth Date : </label>
				<div class="col-sm-10">
				<input type="date" name="Birthdate" required placeholder="Driver's Birthdate..">
				</div>
			</div>
			
				<button type="submit" name="confirm_driver_details"> CONFIRM </button>

				<?php

  				if(isset($_POST['confirm_driver_details'])){

  					$License_Number = $_POST['License_Number'];
  					$Fname = $_POST['Fname'];
  					$Lname = $_POST['Lname'];
  					$Birthdate = $_POST['Birthdate'];

						//$get_cid = "SELECT c_id FROM auto_insurance ORDER BY c_id DESC LIMIT 1";
  						//$result = mysqli_query($con,$get_cid);

  						//echo number_format($result);


  					//$query = "INSERT INTO driver VALUES (default,$License_Number,'$Fname','$Lname','$Birthdate',1000)";

  					$query = "INSERT INTO driver VALUES (default,$License_Number,'$Fname','$Lname','$Birthdate', (SELECT vin from vehicle order by vin desc limit 1))";

  					$query_run = mysqli_query($con,$query);

  					if($query_run){

						//echo '<script type="text/javascript"> alert("success!!") </script>';
						header('location:auto_invoice.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}

  				}



  			?>
			
		</form>
</body>
</html>