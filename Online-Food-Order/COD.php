<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

  <head>
    <title> Cart | FOOD ZILLA </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <?php
        include('../Online-Food-Order/include/header.php');
      ?>



<div class="background"></div>

<div class="container">
	<div class="row">
		<div class="modalbox success col-sm-8 col-md-6 col-lg-5 center animate">
			<div class="icon">
				<span class="glyphicon glyphicon-ok"></span>
			</div>
			<!--/.icon-->
			<h1 id="head_text">ORDER CONFIRM</h1>
      <br>
	  
			<p id="sub_text"> 
				Thank You for Ordering Food frome our site. <br><br>
				We will call you to let you know <br>when your food is coming.
			<br><br></p>
			<button type="button" class="redo btn" onclick="location='foodlist.php'">YAY</button>
			<span class="change">-- Click to Visit Homepage --</span>
		</div>
		<!--/.success-->
	</div>
	<!--/.row-->

</div>
<!--/.container-->
        </body>

</html>