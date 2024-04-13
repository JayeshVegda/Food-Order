<?php
include('session_m.php');

if (!isset($login_session)) {
  header('Location: managerlogin.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <title> Manager Login | FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
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
        
        <a href="view_food_items.php" class="list-group-item">View Food Items</a>
        <a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
        <a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
        <a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item active">View Order Details</a>
        <a href="contactus1.php" class="list-group-item">Customer Feedback</a>
      </div>
    </div>




    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 20px 0px 10px;">
        <form action="" method="POST">
          <br style="clear: both">
          <h3 style="margin-bottom: 0px; text-align: center; font-size: 30px;"> YOUR FOOD ORDER LIST </h3>

          <?php
          // Storing Session
          $user_check = $_SESSION['login_user1'];
          $sql =
            "SELECT * FROM orders INNER JOIN customer ON  orders.username = customer.username  ORDER BY order_date";
          $result = mysqli_query($conn, $sql);


          if (mysqli_num_rows($result) > 0)
           {

          ?>
            <div class="table table-responsive">
              <table class="table table-hover table-condensed ">
                <thead class="thead ">
                  <tr>
                  <th > # </th>
                    <th > ID </th>
                    <th>Date </th>
                    <th> Food Name </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Name </th>
                    <th> Phone </th>
                    <th> Email </th>
                    <th> Address </th>
                    <th> Restaurant </th>
                  </tr>
                </thead>

                <?PHP
                //OUTPUT DATA OF EACH ROW
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                  <tbody>
                    <tr>
                    <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['order_ID']; ?>"/> </td>
                      <td><?php echo $row["order_ID"]; ?></td>
                      <td><?php echo $row["order_date"]; ?></td>
                      <td><?php echo $row["foodname"]; ?></td>
                      <td><?php echo $row["price"]; ?></td>
                      <td><?php echo $row["quantity"]; ?></td>
                      <td><?php echo $row["fullname"]; ?></td>
                      <td><?php echo $row["contact"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["address"]; ?></td>
                      <td><?php echo $row["r_name"]; ?></td>
                    </tr>
                  </tbody>
                  
            </div>
            
          <?php 
        } 
        ?>
        
        </table>
       
          
          <br>


        <?php } else { ?>

          <h4>
            <center>0 RESULTS</center>
          </h4>

        <?php } ?>
      
        </form>
        <br>
      </div>
      <br>
      
    </div>
    <br>
          
  </div>
  
  <br>
  <br>
  <br>
  <br>

</body>

</html>