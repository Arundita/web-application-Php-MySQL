<?php

session_start();
require 'config.php'

?>

<!DOCTYPE html>
<html>
<head>
<title> Payment </title>
<script src="payment.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src = "Payment.js"> </script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> PAYMENT DETAILS </h2>
		</div>
		<br><br>
		

		    <div class="form-group">
                <h4>SELECT PAYMENT METHOD</h4>
                <br>  
				
				
			<div class="form-group">
				<label class="control-label col-sm-2" for="credit">Credit : </label>
				<div class="col-sm-20">
				<button type="submit" onclick="Credit()"> SELECT </button>
				</div>
			</div>
			<br>
			<div class="form-group">
				<label class="control-label col-sm-2" for="debit">Debit : </label>
				<div class="col-sm-20">
				<button type="submit" onclick="Debit()"> SELECT </button>	
				</div>

				<div class="form-group">
				<label class="control-label col-sm-2" for="check">Check : </label>
				<div class="col-sm-20">
				<button type="submit" onclick="Check()"> SELECT </button>	
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="payapl">Paypal : </label>
				<div class="col-sm-20">
				<button type="submit" onclick="PayPal()"> SELECT </button>	
				</div>
			</div>


			</div>

			
			
			<div class="three">
		
		<form action="success.php" method="post">
		<span id="myForm"></span>        
		<p></p><input type="submit" name = "paysubmit" value="Submit">
        </form>

        <?php

        if(isset($_POST['paysubmit'])){

        	header('location:success.php');
        }



		?>
        </div>
  			
			
		
		
</body>
</html>