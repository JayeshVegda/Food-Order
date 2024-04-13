<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | FOOD ZILLA </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/admin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
  <?php
        include('../Online-Food-Order/include/header.php');
      ?>


<div class="container">
<div class="jumbotron jumbotron-fluid">
     <h1>Hello Manager! </h1>
     <p>Manage all your restaurant from here</p>

    </div>
    </div>

<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
        <a href="contactus1.php" class="list-group-item active">Customer Feedback</a>
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="delete_food_items1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Customer Feed-Back </h3>


<?php



// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th> Name </th>
        <th> Email </th>
        <th> Number </th>
        <th> Comment </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Email"]; ?></td>
      <td><?php echo $row["Mobile"]; ?></td>
      <td><?php echo $row["Message"]; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>
          

  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>