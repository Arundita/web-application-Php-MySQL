<?php

session_start();
require 'config.php'

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
<title>Vehicle_Details</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> ENTER VEHICLE DETAILS </h2>
		</div>
		<br><br>

		<form class="form-horizontal" action="auto_details.php" method="post">

	

  			<br><br>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="VIN">Vehicle Identification Number : </label>
				<div class="col-sm-10">
					<input type="number" name="VIN" required placeholder="Vehicle Identification Number..">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="make">Vehicle Make:</label>
				<div class="col-sm-10">
				<input type="text" name="make" required placeholder="Vehicle Make..">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="model">Vehicle Model:</label>
				<div class="col-sm-10">
				<input type="text" name="model" required placeholder="Vehicle Model..">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="year">Vehicle Year : </label>
				<div class="col-sm-10">
				<input type="text" name="year" required placeholder="Vehicle Year..">
				</div>
			</div>


			<div class="form-group">
				<label class="control-label col-sm-2" for="homesec">Vehicle status:</label>

				<input class="radiobtn" type="radio" id="c" name="hs" value="c" checked>
				<label for="c">Auto Insuarnce policy term (current)</label><br>
				<input class="radiobtn" type="radio" id="p" name="hs" value="p">
				<label for="p">Auto Insuarnce policy term (expired)</label>
				
			</div>

				<button type="submit" name="confirm_vehicle_details"> CONFIRM </button>

				<?php

  				if(isset($_POST['confirm_vehicle_details'])){

  					$VIN = $_POST['VIN'];
  					$make = $_POST['make'];
  					$model = $_POST['model'];
  					$year = $_POST['year'];
  					$hs = $_POST['hs'];
  					$c_id= "";

  					$query = "SELECT * FROM vehicle WHERE vin = '$VIN' " ;
  					
					$query_run = mysqli_query($con,$query);
					if(mysqli_num_rows($query_run) > 0){
							echo '<script type="text/javascript"> alert("VIN already exist! try another VIN") </script>';
						}
					else{

 					$query = "INSERT INTO vehicle (vin,v_make,v_model,v_year,v_status,c_id) VALUES ($VIN,'$make','$model','$year','$hs', (SELECT c_id from auto_insurance order by c_id desc limit 1))";

  					$query_run = mysqli_query($con,$query);

  					if($query_run){

						//echo '<script type="text/javascript"> alert("success!!") </script>';
						//header('location:auto_invoice.php');
						header('location:driver_details.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}
				}

  				}



  			?>
			
			

		</form>
</body>
</html>