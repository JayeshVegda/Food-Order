<?php
session_start();
if (!isset($_SESSION['login_user2'])) {
    header("location: customerlogin.php");
}
?>


<html>
<head>
  <title> Explore | Food FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/foodlist.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/slick.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
<script>
    $(document).ready(function() {
      $('.brand').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>
<body>

  <?php
include ('../Online-Food-Order/include/header.php');
  ?>
 



  <section id="s1">
 
  <div class="grid1">
    <div class="grid_img"><img src="images/foodlist_01.webp"></div>
    <div class="grid_img"><img src="images/foodlist_02.jfif"></div>
    <div class="grid_img"><img src="images/foodlist_03.webp"></div>
    <div class="grid_img"><img src="images/foodlist_04.webp"></div>
  </div>

  </section>


  <seaction id="s2">

<div class="brand">
      
      <div class="slide"><img src="images/pizza_logo.png" title="pizza"></div>
      <div class="slide"><img src="images/burger_logo.png" title="burger"></div>
      <div class="slide"><img src="images/sandwich_logo.png" title="sandwich"></div>
      <div class="slide"><img src="images/fries_logo.png" title="fries"></div>
      <div class="slide"><img src="images/shake_logo.png" title="shake"></div>
      <div class="slide"><img src="images/home_logo.png" title="home"></div>
      <div class="slide"><img src="images/chaat_logo.png" title="chaat"></div>
</div>
  </seaction>




  <div class="container2" >
    <div class="text">
  <h3 id="con_text">Inspiration for your order</h3>
  </div>
    <!-- Display all Food from food table -->
  <?php
    require 'connection.php';
    $conn = Connect();
    $sql = "SELECT * FROM food ORDER BY F_ID";
    $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) 
      {
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) 
        {
          if ($count == 0) 
          
            echo "<div class='row'>";
        
        ?>
        <div class="con2_text">
        
        </div>
        <div class="col-md-3">
      <form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
         
            
              <div class="card">
                <img src="<?php echo $row["images_path"]; ?>" class="card-img-top" width="350px" height="300px">
                <div class="card-body">
                  
                 <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                 <h5 class="card-subtext"><?php echo $row["s_text"]; ?></h5>
                 <div class="card_grid">
                 <div class="left_grid">
                 <h5 class="card-subtext">Restaurant : <?php echo $row["r_name"]; ?></h5>
                 </div>
                 <div class="right_grid">
                 <h5 class="card-subtext">Price : <?php echo $row["price"]; ?></h5>
                 </div>
                 </div>
                 <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                 <input type="hidden" name="hidden_rname" value="<?php echo $row["r_name"]; ?>">
                <div class="cardcon">

              <div class="left">
                 <h5 class="card-qun"> 
                  <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" 
                  style="width: 60px;"> 
                </h5>
                </div>
                
                <div class="right">
                
                <input type="submit" name="add" id="som" style="margin-top:8px;" class="btn btn-success" value="Add">
                </div>
                </div>
                 
                 

                </div>
              </div>
              </form>
          </div>
   
  
  <?php /*
        <div class="grid">
            <form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
                
            <div class="mypanel8">
                  <img src="<?php echo $row["images_path"]; ?>" 
                  class="img-responsive">

                 <h4 class="text">
                    <?php echo $row["name"]; ?>
                 </h4>

                 <h5 class="text3">
                  &#8377; 
                  <?php echo $row["price"]; ?>/-
                 </h5>
                 
                 <h5 class="text">Quantity: 
                  <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" 
                  style="width: 50px;"> 
                </h5>

                 <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                 <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">

                 <input type="submit" name="add" id="som" style="margin-top:10px;" class="btn btn-success" value="Add to Cart">
                 
            </div>
          </form>
        </div> */ ?>

      <?php
        $count++;
         if ($count == 4) 
          {
            echo "</div>";
            $count = 0;
          }
        }
      ?>
   
  </div>
  
    <?php
      } 




        else 
      {
    ?>

  <div class="container">
    <div class="jumbotron">
      <center>
        <label style="margin-left: 5px;color: red;">
          <h1>Oops! No food is available.</h1>
        </label>
        <p>Stay Hungry...! :P</p>
      </center>

    </div>
  </div>

<?php
}
?>


</body>

</html>
