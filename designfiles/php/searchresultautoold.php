<?php

session_start();
require 'config.php'

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
<title>Search Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<h3>Auto Search Results Invoice</h3>
	<br><br><br>

	<div class="form-group">
		<form class="myform" action="searchresulthome.php" method="post">
				<label class="control-label col-sm-3" for="search">enter username : </label>
				<input type="text" name="search" required placeholder="enter username...">
			
			<button name="auto" type="submit">Go</button>
			</form>
<?php
$search="";

if(isset($_POST['auto'])){

	$search = $_POST['search'];

    $query = "SELECT * from auto_insurance join customer where username = '$search' ";
    $result_query = mysqli_query($con, $query);
	$fetchRow_query = mysqli_fetch_assoc($result_query);

}
?>

</div>


	<h3>Insurance Details</h3>
	
<form action="" method="post">

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Auto Insurance Start Date : </label>
				
					<input type="numeric" name="homei_id" value="<?php echo $fetchRow_query['a_startdate']?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Auto Insurance End date : </label>
				
					<input type="float" name="homei_amount" value="<?php echo $fetchRow_query['a_enddate']?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Auto Insurance Status : </label>
				
					<input type="text" name="homei_date" value="<?php echo $fetchRow_query['a_status']?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Auto Insurance Premium Amount : </label>
				
					<input type="numeric" name="c_id" value="<?php echo $fetchRow_query['a_amount']?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Auto Insurance Id : </label>
				
					<input type="numeric" name="c_id" value="<?php echo $fetchRow_query['a_id']?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Exit </label>
				
					<button name="logout_user" type="submit"> LOGOUT </button>
			</div>
		
	</form>
</div>
	</body>
</html>