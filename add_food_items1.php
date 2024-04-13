<?php

include('session_m.php');

if (!isset($login_session)) 
{
  header('Location: managerlogin.php');
}

$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);
$s_text = $conn->real_escape_string($_POST['s_text']);
$r_name = $conn->real_escape_string($_POST['r_name']);
$images_path = $conn->real_escape_string($_POST['images_path']);

// Storing Session



$query = 
"INSERT INTO food (name,price,description,images_path,s_text,r_name) VALUES
('" . $name . "','" . $price . "','" . $description . "', '" . $images_path . "', '".$s_text."','".$r_name."')";


if (!mysqli_query($conn,$query)) 
{

?>

  <!DOCTYPE html>
  <html>

  <head>
    <title></title>
    <link rel="stylesheet" type = "text/css" href ="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>

  <body>

    <?php
    include('../Online-Food-Order/include/header.php');
    ?>

    <div class="container">
      <div class="jumbotron">
        <h1>Oops...!!! </h1>
        <p>Kindly enter your Restaurant details before adding food items.</p>
        <p><a href="myrestaurant.php"> Click Me </a></p>

      </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
  </body>

  </html>

<?php

} 

else 
{
  echo "SUCCESS";
  header('Location: add_food_items.php');
}

$conn->close();


?>