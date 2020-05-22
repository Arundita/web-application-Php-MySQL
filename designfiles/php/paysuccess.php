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

			<h2> PAYMENT SUCCESSFUL! </h2>
		</div>



	<button name="logout_user" type="submit"> LOGOUT </button>

	<?php

		if(isset($_POST['logout_user'])){
  		session_destroy();
  		header('location:login.php');
  		}

  	?>
  </div>

			</body>
</html>