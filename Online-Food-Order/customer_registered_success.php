<html>

  <head>
    <title> Manager Login | FOOD ZILLA </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  <?php
        include('../Online-Food-Order/include/header.php');
      ?>

<?php
require 'connection.php';
$conn = Connect();

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$password = $conn->real_escape_string($_POST['password']);
$address = $conn->real_escape_string($_POST['address']);

$query = "INSERT into CUSTOMER(fullname,username,email,contact,password,address) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $password ."','" . $address ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();
?>




<section id="s1">
    <div class="con">
      <div class="con_img">
        <img src="images/welcome.png" >
      </div>
      <div class="text">
        <h3 id="head_text">Your account has been created</h3>
        <p id="head_subtext">Login Now from <a href="customerlogin.php">HERE</a></p>
        </div>
    </div>
</section>


    </body>
</html>