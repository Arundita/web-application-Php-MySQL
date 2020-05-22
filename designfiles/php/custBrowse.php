<?php

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
<style>



	.container{
		width: 80%;
	}



</style>


</head>
<body>



<div class="container">
	<h3>Auto Insurances of all customers</h3>
	<br><br>

<div class="form-group">
				
					<p> <?php $query = "SELECT * from auto_insurance";


    $result_query = mysqli_query($con, $query);
	//$row = mysqli_fetch_assoc($result_query);

	while($row = mysqli_fetch_assoc($result_query)){

		echo "Customer Id: ";
		echo htmlspecialchars($row['c_id'], ENT_QUOTES);
		echo ", ";
		echo "Start Date: ";
		echo htmlspecialchars($row['a_startdate'], ENT_QUOTES);
		echo ", ";
		echo "End Date: ";
		echo htmlspecialchars($row['a_enddate'], ENT_QUOTES);
		echo ", ";
		echo "Status: ";
		echo htmlspecialchars($row['a_status'], ENT_QUOTES);
		echo ", ";
		echo "Amount: ";
		echo htmlspecialchars($row['a_amount'], ENT_QUOTES);
		echo "<br>";

		//echo $row['a_amount'];
		
		
	}

	?><p>
</div>
</div>


<div class="container">
	<h3>Home Insurances of all customers</h3>
<br><br>
<div class="form-group">
				
	<p> <?php $query = "SELECT * from home_insurance";


    $result_query = mysqli_query($con, $query);
	//$row = mysqli_fetch_assoc($result_query);

	while($row = mysqli_fetch_assoc($result_query)){

		echo "Customer Id: ";
		echo htmlspecialchars($row['c_id'], ENT_QUOTES);
		echo ", ";
		echo "Start Date: ";
		echo htmlspecialchars($row['hs_startdate'], ENT_QUOTES);
		echo ", ";
		echo "End Date: ";
		echo htmlspecialchars($row['hs_enddate'], ENT_QUOTES);
		echo ", ";
		echo "Status: ";
		echo htmlspecialchars($row['hs_status'], ENT_QUOTES);
		echo ", ";
		echo "Amount: ";
		echo htmlspecialchars($row['hs_amount'], ENT_QUOTES);
		echo "<br>";

		//echo $row['a_amount'];
		
		
	}

	?>
	<br><br>

	<form action="" method="post">
		<button name="logout_user" type="submit"> Logout </button>
		<button name="homepage" type="submit"> Go to Homepage </button>
	</form>

	<?php

		if(isset($_POST['logout_user'])){
  		session_destroy();
  		header('location:login.php');
  		}

  		if(isset($_POST['homepage'])){
  		header('location:welcomepage.php');
  		}

  	?>
</div>
</div>

</body>
</html>