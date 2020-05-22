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
	<h3>Select Insuarnce Type to search</h3>
	<br><br><br>

	<div class="form-group">
			

			<form class="myform" action="searchresulthome.php" method="post">
			<button name="home" type="submit">Home Insurance</button>
			</form>
	

<br><br>

				<form class="myform" action="searchresultauto.php" method="post">
	<button name="auto" type="submit">Auto Insurance</button>
</form>


<br><br>

				<form class="myform" action="welcomepage.php" method="post">
	<button name="home" type="submit">Homepage</button>
</form>

	</div>

			

<?php

if(isset($_POST['home'])){

	header('location:searchresulthome.php');
}

if(isset($_POST['auto'])){

header('location:searchresultauto.php');
}

if(isset($_POST['home'])){
  		header('location:welcomepage.php');
  		}

?>



</div>
	</body>
</html>