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
  <title> Online Payment | FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/delivery.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/city.js"></script>


<body>


  <?php
  include('../Online-Food-Order/include/header.php');
  ?>


  <section id="s1">
    <div class="con">



      <div class="left">
        <form role="presentation" action="customer_registered_success.php" method="POST">
          <h1 id="left_head">SHIPPING INFORMATION</h1>

          <div class="form1">

            <div class="name_grid">

              <div class="1">
                <label id="fname">First Name</label>
                <input id="fname" type="text" name="fname" required=""  autofocus="">
              </div>

              <div class="2">
                <label id="mname">Middle Name</label>
                <input id="mname"  name="mname"  autofocus="">
              </div>

              <div class="3">
                <label id="lname">Last Name</label>
                <input id="lname" type="email" name="lname"  required="" autofocus="">
              </div>
            </div>

            <div class="contact_grid">
              <div class="4">
                <label id="email">Email</label>
                <input id="email" type="email" name="email" onkeypress="return AvoidSpace(event)" required="" autofocus="">
              </div>

              <div class="4">
                <label id="number">Phone Number</label><br>
                <input id="number" type="number" name="number" required="" maxlength="10" autofocus="">
              </div>
            </div>

            <div class="fade_rule"></div>


            <div class="5">
              <label id="address_text">Address</label><br>
              <textarea id="address" type="text" rows="4" maxlength="128" name="address" required="" wrap="hard" autofocus=""> </textarea>
            </div>
            <div class="address_grid">

              <div class="5">
                <input id="zipcode" type="number" name="zipcode" required="" placeholder="ZIPCODE" maxlength="10" autofocus="">
              </div>
              <div class="5">
                <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control" required>
                </select>
              </div>
              <div class="5">
                <select id="state" class="form-control" required></select>
                <script language="javascript">
                  print_state("sts");
                </script>
              </div>
            </div>
            <div class="fade_rule"></div>

            <label id="add_text"> Additional Information </label><br>
            <textarea id="add" type="text" rows="4" maxlength="128" name="address" required="" wrap="hard" autofocus=""> </textarea>
          </div>


          <?php

          $total = 0;
          $cost = 0;
          $gst = 0;
          $grand = 0;
          foreach ($_SESSION["cart"] as $keys => $values) {
          ?>

          <?php
            $total = $total + ($values["food_quantity"] * $values["food_price"]);
            $gst = $total * 5 / 100;
            $cost = 20;
            $grand = $total + $gst + $cost;
          }
          ?>

      </div>
      <div class="right">

        <h2 id="right_head">ORDER SUMMERY</h2>
        <div class="fade_rule2"></div>

        <div id="right_1">
          <div id="itm">
            <label id="total_items"> Sub Total : </label>
            <label id="cost">&#x20b9; <?php echo number_format($total, 1); ?> </label>
            <label id="Shipping"> Shipping Cost : </label>
            <label id="cost"> &#x20b9; <?php echo number_format($cost, 1); ?> </label><br>
            <label id="gst"> Total Gst : </label>
            <label id="cost"> &#x20b9; <?php echo number_format($gst, 1); ?></label>
            <div class="fade_rule3"></div>
            <div class="ttl">
              <label id="grand"> Grand Total : </label>
              <label id="cost"> &#x20b9;<?php echo number_format($grand, 1); ?> </label>
            </div>
          </div>

          <div class="itm_paymentmode">
          <label class="head_pay">
            Select your Payment Method<label>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment1" />
                <label class="form-check-label" for="flexRadioDefault1"> Cash on delivery </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment2" checked />
                <label class="form-check-label" for="flexRadioDefault2"> Online Payment </label>
              </div>
              </div>


              <div class="submitbtn"> 
              <button class="button-30" role="button">CHECK-OUT</button>
              </div>
        </div>
      


  </section>


</body>

</html>