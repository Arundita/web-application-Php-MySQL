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

$get_cust_id = "";
$result_cust_id = "";
$fetchRow = "";
$query = "";
$result_query = "";
$fetchRow_query = "";

$Today=date('y:m:d');
// add 3 days to date
$NewDate=Date('y:m:d', strtotime('+30 days'));
//date_add($date,date_interval_create_from_date_string("30 days"));
//echo date_format($date,"Y-m-d");

$query_insert = "INSERT INTO auto_invoice VALUES(default,(SELECT a_amount from auto_insurance order by a_id desc limit 1), '$NewDate', (SELECT c_id from auto_insurance order by c_id desc limit 1))";

$query_run = mysqli_query($con,$query_insert);


$query = "SELECT * FROM auto_invoice WHERE c_id = (SELECT c_id from auto_insurance order by c_id desc limit 1)";
$result_query = mysqli_query($con, $query);
$fetchRow_query = mysqli_fetch_assoc($result_query);

?>
<div class="container">
	<h3>Invoice Details</h3>
	
<form action="" method="post">

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Invoice Id : </label>
				
					<input type="numeric" name="ai_id" value="<?php echo htmlspecialchars($fetchRow_query['ainvoice_id'],ENT_QUOTES) ?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Amount : </label>
				
					<input type="float" name="homei_amount" value="<?php echo htmlspecialchars($fetchRow_query['ainvoice_amt'],ENT_QUOTES)?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Payment Due date : </label>
				
					<input type="text" name="homei_date" value="<?php echo htmlspecialchars($fetchRow_query['ainvoice_duedate'],ENT_QUOTES)?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Customer Id : </label>
				
					<input type="numeric" name="c_id" value="<?php echo htmlspecialchars($fetchRow_query['c_id'],ENT_QUOTES) ?>" >
			</div>

			<div class="form-group">
				
				
					<button name="confirm_invoice" type="submit">Ready to make payment</button>
			</div>
		

		
	</form>

	<?php

	if(isset($_POST['confirm_invoice'])){

		header('location:payment.php');
	}

?>

</div>
	</body>
</html>