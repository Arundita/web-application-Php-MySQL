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

		<br><br>

<div class="form-group">

	
	<form action="" method="post">
		<button name="logout_user" type="submit"> Logout </button>
		<button name="buy_another" type="submit"> Buy Another Insurance?</button>
		<button name="homepage" type="submit"> Go to Homepage </button>
	</form>

		
</div>


		<?php

		if(isset($_POST['logout_user'])){
  		session_destroy();
  		header('location:login.php');
  		}

  		if(isset($_POST['buy_another'])){
  		header('location:SELECT_INSURANCE.php');
  		}

  		if(isset($_POST['homepage'])){
  		header('location:welcomepage.php');
  		}

  	?>
  </div>
</body>
</html>
