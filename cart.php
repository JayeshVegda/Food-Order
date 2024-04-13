<?php
session_start();
require 'connection.php';
$conn = Connect();

if (!isset($_SESSION['login_user2'])) {
  header("location: customerlogin.php");
}
?>

<html>

<head>
  <title> Cart | FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/delivery.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/city.js"></script>

<body>
  <?php
  include('../Online-Food-Order/include/header.php');
  ?>




  <?php
  if (!empty($_SESSION["cart"])) {
  ?>
    <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Looks tasty...!!!</p>

      </div>


    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;">

      <table class="table table-sm">
        <thead class="thead-dark">
          <tr>

            <th width="40%">Food Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price Details</th>
            <th width="20%">Resturant</th>
            <th width="15%">Order Total</th>
            <th width="5%">Action</th>
          </tr>
        </thead>


        <?php
        $total = 0;
        foreach ($_SESSION["cart"] as $keys => $values) {
        ?>


          <tr>

            <td ><?php echo $values["food_name"]; ?></td>
            <td><?php echo $values["food_quantity"] ?></td>
            <td>&#8377; <?php echo $values["food_price"]; ?></td>
            <td> <?php echo $values["r_name"]; ?></td>
            <td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
            <td><a href="cart.php?action=delete&id=<?php echo $values["food_id"]; ?>">
                <button type="button" role="button" class="btn btn-sm btn-danger">Remove</button></a></td>
          </tr>


        <?php

          $total = $total + ($values["food_quantity"] * $values["food_price"]);
        }
        ?>

        <tr>
          <td colspan="3" align="right" width="90%" >Total</td>
          <td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
          <td></td>
        </tr>
      </table>

      <a href="cart.php?action=empty">
        <button class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>
      &nbsp;

      <a href="foodlist.php">
        <button class="btn btn-warning">Continue Shopping</button></a>
      &nbsp;

      <a href="payment.php">
        <button class="btn btn-success pull-right">
          <span class="glyphicon glyphicon-share-alt"></span> Check Out</button>
      </a>';

    </div>
    </div>
    <br><br><br><br><br><br><br>
  <?php
  }


  if (empty($_SESSION["cart"])) {
  ?>
    <section id="s1">
      <div class="s1_con">
        <div class="con_img">
          <img id="cart_img" src="images/empty_cart.png">
        </div>
        <div class="con_text">
          <h3 class="con_text_head">Your cart is empty</h3>
          <span class="con_text_subhead">Looks like you haven't added <br>anything to your cart yet</span>
        </div>

        <div class="con_btn">
          <button class="button-5" onclick="location.href='foodlist.php'" )>GO TO FOOD PAGE</button>
        </div>
      </div>
    </section>

  <?php
  }
  ?>

  <?php
  if (isset($_POST["add"])) 
  {
    header("Refresh:0");
    if (isset($_SESSION["cart"])) 
    {
      $item_array_id = array_column($_SESSION["cart"], "food_id");
      if (!in_array($_GET["id"], $item_array_id)) 
      {
        $count = count($_SESSION["cart"]);
        $item_array = array(
          'food_id' => $_GET["id"],
          'food_name' => $_POST["hidden_name"],
          'food_price' => $_POST["hidden_price"],
          'r_name' => $_POST["hidden_rname"],
          'food_quantity' => $_POST["quantity"],
        );

        $_SESSION["cart"][$count] = $item_array;
        echo '<script>window.location="cart.php"</script>';
      } 
      else 
      {
        echo '<script>alert("Products already added to cart")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    } 
    else 
    {
      $item_array = array(
        'food_id' => $_GET["id"],
        'food_name' => $_POST["hidden_name"],
        'food_price' => $_POST["hidden_price"],
        'r_name' => $_POST["hidden_rname"],
        'food_quantity' => $_POST["quantity"],
      );
      $_SESSION["cart"][0] = $item_array;
    }
  }

  if (isset($_GET["action"])) 
  {
    if ($_GET["action"] == "delete") 
    {
      foreach ($_SESSION["cart"] as $keys => $values) 
      {
        if ($values["food_id"] == $_GET["id"]) 
        {
          unset($_SESSION["cart"][$keys]);
          echo '<script>alert("Food has been removed")</script>';
          echo '<script>window.location="cart.php"</script>';
        }
      }
    }
  }

  if (isset($_GET["action"])) 
  {
    if ($_GET["action"] == "empty") 
    {
      foreach ($_SESSION["cart"] as $keys => $values) 
      {
        unset($_SESSION["cart"]);
        echo '<script>alert("Cart is made empty!")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
  ?>

</body>
</html>