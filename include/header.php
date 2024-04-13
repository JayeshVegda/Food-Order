 

   <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" class="navbar navbar-light" style="background-color: darkblack;" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="font-size: 25px; margin-left: -50px;">FOOD ZILLA</a>
        </div>

     
<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">HOME</a></li>
            <li ><a href="aboutus.php">ABOUT</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>
           <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> FOODZONE </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> CART 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="add_food_items.php">CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT </a></li>
          </ul>

<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php">HOME</a></li>
            <li ><a href="aboutus.php">ABOUT</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>
           <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> FOODZONE </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> CART 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT </a></li>
          </ul>
  <?php        
}
else {

  ?>
   <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php">HOME</a></li>
            <li ><a href="aboutus.php">ABOUT</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>
            <li><a href="customerlogin.php"> LOGIN </a></li>
   </ul>
<?php
}
?>
        </div>

      </div>
    </nav>



    