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


<?php

$query = "SELECT * FROM home_insurance WHERE c_id = (SELECT c_id from customer order by c_id desc limit 1)";
$result_query = mysqli_query($con, $query);
$fetchRow_query = mysqli_fetch_assoc($result_query);

?>
<div class="container">
	<h3>Insurance Details</h3>
	
<form action="" method="post">

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Start Date : </label>
				
					<input type="numeric" name="homei_id" value="<?php echo $fetchRow_query['hs_startdate']?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance End date : </label>
				
					<input type="float" name="homei_amount" value="<?php echo $fetchRow_query['hs_enddate']?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Status : </label>
				
					<input type="text" name="homei_date" value="<?php echo $fetchRow_query['hs_status']?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Premium Amount : </label>
				
					<input type="numeric" name="c_id" value="<?php echo $fetchRow_query['hs_amount']?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Id : </label>
				
					<input type="numeric" name="c_id" value="<?php echo $fetchRow_query['hs_id']?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Exit </label>
				
					<button name="logout_user" type="submit"> LOGOUT </button>
			</div>
		
	</form>

	<?php


if(isset($_POST['logout_user'])){
  session_destroy();
  header('location:login.php');
  }

?>

</div>
	</body>
</html>