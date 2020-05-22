<?php

session_start();
require 'config.php'

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Home_Details</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="header">

			<h2> ENTER HOME DETAILS </h2>
		</div>
		<br><br>

		<form class="form-horizontal" action="Home_Details.php" method="post">

	

  			<br><br>	
			<div class="form-group">
				<label class="control-label col-sm-3" for="Purchased_Date">Home Purchased Date:</label>
					<input type="date" name="Purchased_Date" required placeholder="mm/dd/yy">
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="Purchased_Value">Home Purchased Value:</label>
				<input type="float" name="Purchased_Value" required placeholder="Purchased Value..">
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="Home_Area">Home Area:</label>
				<input type="Number" name="Home_Area" required placeholder="Home Area..">
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="Home_Type">Home Type:</label>
				<input class="radiobtn" type="radio" id="s" name="ht" value="s" checked>
  					<label for="s">Single Family</label>
 				<input class="radiobtn" type="radio" id="m" name="ht" value="m">
  					<label for="m">Multi Family</label><br>
  					<input class="radiobtn" type="radio" id="c" name="ht" value="c">
  					<label for="c">Condominium</label>
  					<input class="radiobtn" type="radio" id="t" name="ht" value="t">
  					<label for="t">Town House</label>
				
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-3" for="basement">Basement:</label>

				<input class="radiobtn" type="radio" id="yes" name="b" value=1 checked>
				<label for="yes">I have a basement</label>
				<input class="radiobtn" type="radio" id="no" name="b" value=0>
				<label for="no">No basement</label>
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="AutoFire">AutoFire Notification:</label>

				<input class="radiobtn" type="radio" id="yes" name="af" value=1 checked>
				<label for="yes"> Auto fire notification to the fire department</label><br>
				<input class="radiobtn" type="radio" id="no" name="af" value=0>
				<label for="no">  No auto fire notification to fire department</label>
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-3" for="homesec">Home Security System:</label>

				<input class="radiobtn" type="radio" id="yes" name="hs" value=1 checked>
				<label for="yes">Security system is installed and monitored</label><br>
				<input class="radiobtn" type="radio" id="no" name="hs" value=0>
				<label for="no">Security system is not installed or monitored</label>
				
			</div>

			
			<div class="form-group">
				<label class="control-label col-sm-3" for="swimmingpool">Swimming Pool:</label>

				<input class="radiobtn" type="radio" id="u" name="sp" value="u" checked>
				<label for="u">Underground swimming pool</label>
				<input class="radiobtn" type="radio" id="o" name="sp" value="o">
				<label for="o">Overground swimming pool</label><br>
				<input class="radiobtn" type="radio" id="i" name="sp" value="i">
				<label for="i">Indoor swimming pool</label>
				<input class="radiobtn" type="radio" id="m" name="sp" value="m">
				<label for="m">Multiple swimming pool</label><br>
				<input class="radiobtn" type="radio" id="n" name="sp" value="NULL">
				<label for="n">No swimming pool        </label>
				
			</div>
			
			
			
				<button type="submit" name="confirm_home_details"> CONFIRM </button>

		</form>

		<?php

		if(isset($_POST['confirm_home_details'])){

  					$Purchased_Date = $_POST['Purchased_Date'];
  					$Purchased_Value = $_POST['Purchased_Value'];
  					$Home_Area = $_POST['Home_Area'];
  					$ht = $_POST['ht'];
  					$af = $_POST['af'];
  					$hs = $_POST['hs'];
  					$sp = $_POST['sp'];
  					$b = $_POST['b'];
  					
  					$get_cid = "SELECT c_id FROM home_insurance ORDER BY c_id DESC LIMIT 1";
  					$result = mysqli_query($con,$get_cid);

  					$query = "INSERT INTO home (home_id,home_pdate,home_pvalue,home_area,home_type,home_autofirenoti,home_secsys,home_swimpool,home_basement,c_id) VALUES (default,'$Purchased_Date','$Purchased_Value','$Home_Area','$ht',$af,$hs,'$sp',$b, (SELECT c_id from home_insurance order by c_id desc limit 1))";

  					$query_run = mysqli_query($con,$query);

  					if($query_run){
						
						header('location:home_invoice.php');
					}
					else{
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					}
  				}




		?>
</body>
</html>