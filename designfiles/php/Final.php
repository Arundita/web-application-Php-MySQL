<?php

session_start();
require 'config.php'

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
<title>Search Page</title>
<script src="Search_Home.js" type="text/javascript"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="SearchHome.js"></script>

</head>
<body>
<div class="container">
	<h3>Home ISearch Results</h3>
	<br><br><br>

	<div class="form-group">
		<form class="myform" action="searchresulthome.php" method="post">
				<label class="control-label col-sm-3" for="search">enter username : </label>
				<input type="text" name="search" required placeholder="enter username...">
			
			
			</form>
<?php
$search="";

if(isset($_POST['home'])){

	$search = $_POST['search'];

    $query = "SELECT * from home_insurance join customer where username = '$search' ";
    $result_query = mysqli_query($con, $query);
	$fetchRow_query = mysqli_fetch_assoc($result_query);

}
?>

</div>


	<h3>Insurance Details</h3>
	
<form action="#" method="post">

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Start Date : </label>
				
					<input type="numeric" name="homei_id" id="STARTDATE" value="<?php echo $fetchRow_query['hs_startdate']?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance End date : </label>
				
					<input type="float" name="homei_amount" id="ENDDATE" value="<?php echo $fetchRow_query['hs_enddate']?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Status : </label>
				
					<input type="text" name="homei_date" id="INSURANCESTATUS" value="<?php echo $fetchRow_query['hs_status']?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Premium Amount : </label>
				
					<input type="numeric" name="c_id" id="PREMIUMAMOUNT" value="<?php echo $fetchRow_query['hs_amount']?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Home Insurance Id : </label>
				
					<input type="numeric" name="c_id" id="INSURANCEID" value="<?php echo $fetchRow_query['hs_id']?>" >
			</div>
			<button onclick="ResultHome()" type="submit">Go</button>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Exit </label>
				
					<button name="logout_user" type="submit"> LOGOUT </button>
			</div>
		
	</form>
</div>
	</body>
</html>