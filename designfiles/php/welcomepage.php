<?php

session_start();
require 'config.php'

?>


<!DOCTYPE html>
<html>
<head>
<title>Welcome Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

body {
background-image: url("images/bg6.jpg");
background-size: cover;
  overflow-y: hidden;
}

.container{
  text-align:center;
  border: 15px solid #A8A8A8;
  border-radius: 30px;
  padding: 60px;
  margin: 75px;
  background-color: #E0E0E0;
  width: 92%;
}

.topnav {
  overflow: hidden;
  background-color: #99ccff;
}

.topnav button {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav button:hover {
  background-color: #ddd;
  color: black;
}

.topnav button.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }

}
p{
  font-size: 20px;
}
}
</style>

</head>
<body>

	<div class="container">
		<div class="header">

			<div class="topnav">
        <form action="" method = "post">
          <button class="active" name="buy_insurance">Buy</a>
          <button name="browse_insurance" type="submit">Browse</button>
            <button name="search_insurance" type="submit"> Search Insurance <i class="fa fa-search"></i></button>
            <button id="logout_user" name="logout_user" type="submit"> Logout </button>
          </form>
     
        </div>
				<br><br><br>

    			<?php

    			if(isset($_POST['buy_insurance'])){

    				header('location:homepage.php');
    			}

    			if(isset($_POST['search_insurance'])){

    				//$search = $_POST['search'];

    				//$query = "SELECT * from customer where username = '$search' ";
    				//$result_query = mysqli_query($con, $query);
					//$fetchRow_query = mysqli_fetch_assoc($result_query);

					header('location:screen4.php');
				}

				if(isset($_POST['browse_insurance'])){
					//echo '<script type="text/javascript"> alert("success!!") </script>';
					//if a wds employee
						$que = "SELECT empCust from customer order by c_id desc limit 1";
						$que_result = mysqli_query($con, $que);
						$fetch_query = mysqli_fetch_assoc($que_result);

						if($fetch_query['empCust'] == 'y'){
							//print_r("true");
						header('location:custBrowse.php');
          }
          else{
            header('location:browsedetails.php');
          }
	
				}

        if(isset($_POST['logout_user'])){
      session_destroy();
      header('location:registration.php');
      }

    			?>
  				

			<h3>Hello 

			<?php echo $_SESSION['username'] ?>

		!</h3>
		</div>	
		<br>
			<h2> Welcome to WDS Insurance Portal </h2>

			<p> We Do Secure (WDS) is one of the largest life insurance provider company in the United States. We offer Auto and Home insurance to the customers. <br> You will be valued here at WDS.   </p>
		</div>
			

</body>
</html>