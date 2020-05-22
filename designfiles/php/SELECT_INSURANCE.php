<?php

session_start();
require 'config.php'

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
<title>Insurance_Option</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> SELECT YOUR INSURANCE </h2>
		</div>
		<br><br>

		
  			<br><br>	

  			<form class="myform" action="select_insurance.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="Home_Select">HOME INSURANCE : </label>
				<div class="col-sm-20">
				<button type="submit" name="Home_Select"> SELECT </button>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Auto_Select">AUTO INSURANCE : </label>
				<div class="col-sm-20">
				<button type="submit" name="Auto_Select"> SELECT </button>	
				</div>
			</div>
		</form>

		<?php

		$today=date('y:m:d');
		$newDate=Date('y:m:d', strtotime('+90 days'));

		if(isset($_POST['Home_Select'])){

			$query = "INSERT INTO home_insurance VALUES ('$today','$newDate','c',1923.99,10000,(SELECT c_id from customer order by c_id desc limit 1),(SELECT c_type from customer order by c_id desc limit 1))";

  					$query_run = mysqli_query($con,$query);

  					if($query_run){
						
						header('location:HOME_DETAILS.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}
				}

		if(isset($_POST['Auto_Select'])){
			$query = "INSERT INTO auto_insurance VALUES ('$today','$newDate','p',1723.99,10000,(SELECT c_id from customer order by c_id desc limit 1))";
			$query_run = mysqli_query($con,$query);

  					if($query_run){
						
						header('location:AUTO_DETAILS.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}


		}


		?>
			
			
		
</body>
</html>