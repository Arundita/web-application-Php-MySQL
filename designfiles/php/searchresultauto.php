<?php

//session_start();
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
	
	<br><br><br>

	<div class="form-group">
		<form class="myform" method="post" >
		
				
				<input type="text" name="search" placeholder="enter username...">
				
			<button name="auto" onclick="myFunction()" type="submit"> Next</button>

			
		</form>
			
			
<?php

$search="";
$query="";
$fetchRow_query="";

if (isset($_POST['search'])) {
    $search = $_POST['search'];
	}

	if (isset($query)) {
    $query = "SELECT * from auto_insurance join customer where username = '$search' "	;
	}

    $result_query = mysqli_query($con, $query);
  
	$fetchRow_query = mysqli_fetch_assoc($result_query);

?>



</div>

<div class="form1">
<form action="" method="post" name = "myform" id="myform" hidden>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Start Date : </label>
				
					<input type="numeric" name="a_startdate" value="<?php echo htmlspecialchars($fetchRow_query['a_startdate'],ENT_QUOTES) ?>" required>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> End date : </label>
				
					<input type="float" name="a_enddate" value="<?php echo htmlspecialchars($fetchRow_query['a_enddate'],ENT_QUOTES) ?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Status : </label>
				
					<input type="text" name="a_status" value="<?php echo htmlspecialchars($fetchRow_query['a_status'],ENT_QUOTES) ?>" >
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Premium Amount : </label>
				
					<input type="numeric" name="a_amount" value="<?php echo htmlspecialchars($fetchRow_query['a_amount'],ENT_QUOTES) ?>" >
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="fname"> Insurance Id : </label>
				
					<input type="numeric" name="a_id" value="<?php echo htmlspecialchars($fetchRow_query['a_id'],ENT_QUOTES) ?>" >
			</div>

			<div class="form-group">
				
				
					<button name="logout_user" type="submit"> LOGOUT </button>
					<button name="homepage" type="submit"> BACK </button>
			</div>

			<?php

				if(isset($_POST['auto'])){

					//die('123');
					if($fetchRow_query != NULL){
					echo '<script>
							function myFunction() { 
  							var x = document.getElementById("myform");
  							x.hidden = false;
  							event.preventDefault();
  							
							}
							</script>';
					

					}


   					//	sleep(5);

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
</div>
	</body>
</html>