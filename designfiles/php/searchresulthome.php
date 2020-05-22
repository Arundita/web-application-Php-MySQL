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

	<h3>Home Search Results</h3>
	<br><br><br>

	<div class="form-group">

		<form class="myform" action="" method="post">
				
				<input type="text" name="search" value="" placeholder="enter username...">
			
			<button name="home" id="seeAnotherField" onclick="myFunction()" type="submit">Next</button>

		</form>
		
<?php

$search="";
$query="";
$fetchRow_query="";



	//echo '<script type="text/javascript"> alert("success!!") </script>';
	if (isset($_POST['search'])) {
    $search = $_POST['search'];
	}
	//$search = $_POST['search'] ? $_POST['search'] : '';

	//print_r($search);
	if (isset($query)) {
    $query = "SELECT * from home_insurance join customer where username = '$search' ";
	}
    //$query = "SELECT * from home_insurance join customer where username = '$search' ";
    $result_query = mysqli_query($con, $query);
	$fetchRow_query = mysqli_fetch_assoc($result_query);

	//print_r($fetchRow_query);

?>

</script>

</div>


	
	
<form action="" method="post" name = "myform" id="myform" hidden >

			<div  class="form-group">
				<label class="control-label col-sm-2" for="fname"> Start Date : </label>
				
					<input type="numeric" name="hs_startdate" value="<?php echo htmlspecialchars($fetchRow_query['hs_startdate'],ENT_QUOTES) ?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> End date : </label>
				
					<input type="float" name="hs_enddate" value="<?php echo htmlspecialchars($fetchRow_query['hs_enddate'],ENT_QUOTES) ?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Status : </label>
				
					<input type="text" name="hs_status" value="<?php echo htmlspecialchars($fetchRow_query['hs_status'],ENT_QUOTES) ?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Premium Amount : </label>
				
					<input type="numeric" name="hs_amount" value="<?php echo htmlspecialchars($fetchRow_query['hs_amount'],ENT_QUOTES) ?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Insurance Id : </label>
				
					<input type="numeric" name="hs_id" value="<?php echo htmlspecialchars($fetchRow_query['hs_id'],ENT_QUOTES) ?>" >
			</div>

			<div class="form-group">
			
				
					<button name="logout_user" type="submit"> LOGOUT </button>
					<button name="homepage" type="submit"> BACK </button>
			</div>

			<?php

			if(isset($_POST['home'])){
				if($fetchRow_query != NULL){
					echo '<script>
							function myFunction() { 
  							var x = document.getElementById("myform");
  							x.hidden = false;
  							event.preventDefault();
  							
							}
							</script>';
						}
			}

		if(isset($_POST['logout_user'])){
  		session_destroy();
  		header('location:login.php');
  		}

  		if(isset($_POST['homepage'])){
  		header('location:screen4.php');
  		}

  		?>
		
	</form>
</div>
	</body>
</html>