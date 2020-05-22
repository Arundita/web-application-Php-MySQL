<?php

//session_start();
session_unset();
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

	<?php


	//if a wds employee
	$que = "SELECT empCust from customer order by username desc limit 1";
	$que_result = mysqli_query($con, $que);
	$fetch_query = mysqli_fetch_assoc($que_result);

	

		$query = "SELECT * from auto_insurance join customer order by username desc limit 1";
		$result_query = mysqli_query($con, $query);
		$fetchRow_query = mysqli_fetch_assoc($result_query);


	?>


	<div class="container">
	<h3>Auto Insurance Details</h3>
	
<form action="" method="post">

			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Start Date : </label>
				
					<input type="numeric" name="homei_id" value="<?php echo htmlspecialchars($fetchRow_query['a_startdate'], ENT_QUOTES)?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> End date : </label>
				
					<input type="float" name="homei_amount" value="<?php echo htmlspecialchars($fetchRow_query['a_enddate'], ENT_QUOTES)?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Status : </label>
				
					<input type="text" name="homei_date" value="<?php echo htmlspecialchars($fetchRow_query['a_status'], ENT_QUOTES)?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Premium Amount : </label>
				
					<input type="numeric" name="c_id" value="<?php echo htmlspecialchars($fetchRow_query['a_amount'], ENT_QUOTES)?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Insurance Id : </label>
				
					<input type="numeric" name="c_id" value="<?php echo htmlspecialchars($fetchRow_query['a_id'], ENT_QUOTES)?>" >
			</div>

	<?php

	$query1 = "SELECT * from home_insurance join customer order by username desc limit 1";

    $result_query1 = mysqli_query($con, $query1);
	$fetchRow_query1 = mysqli_fetch_assoc($result_query1);

	?>

	<h3>Home Insurance Details</h3>
	
<form action="" method="post">

			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Start Date : </label>
				
					<input type="numeric" name="homei_id" value="<?php echo htmlspecialchars($fetchRow_query1['hs_startdate'], ENT_QUOTES)?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> End date : </label>
				
					<input type="float" name="homei_amount" value="<?php echo htmlspecialchars($fetchRow_query1['hs_enddate'], ENT_QUOTES)?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Status : </label>
				
					<input type="text" name="homei_date" value="<?php echo htmlspecialchars($fetchRow_query1['hs_status'], ENT_QUOTES)?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Premium Amount : </label>
				
					<input type="numeric" name="c_id" value="<?php echo htmlspecialchars($fetchRow_query1['hs_amount'], ENT_QUOTES)?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Insurance Id : </label>
				
					<input type="numeric" name="c_id" value="<?php echo htmlspecialchars($fetchRow_query1['hs_id'], ENT_QUOTES)?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="fname"> Exit </label>
				
					<button name="logout_user" type="submit"> Logout </button>
					<button name="home" type="submit"> Go to Homepage</button>
			</div>

			<?php

			if(isset($_POST['logout_user'])){
  		session_destroy();
  		header('location:login.php');
  		}
  		
			if(isset($_POST['home'])){
  		header('location:welcomepage.php');
  		}

  		?>

		
	</form>
</div>
	</body>
</html>