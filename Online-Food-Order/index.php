<?php
session_start();
?>

<html>

<head>
  <title> Home | FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">


<?php
include('../Online-Food-Order/include/header.php');
?>


<body>


  <div class="wide">
    <div class="main">
      <div class="main_text">
        <h2 id="text1">GOOD FOOD <BR> GOOD MOOD</h2>
      </div>
      <div class="subline">
        <h3 id="sub_text">  Get your favorite fastfood delivery <br>
          <p id="sub_text_p"> with in 30 mint, order online </p>
        </h3>
      </div>
    </div>
  </div>

  <section id="services">
    <div class="wel">
      <center>
        <span class="head_wel">EAT WHAT MAKES YOU HAPPY</span>
      </center>
    </div>



    <div class="try">
      <div class="ser">

        <img src="images/burger01.jpg" alt="" />
        <p class="cap"> BURGER </p>
        <div class="overlay"></div>
        <div class="button"><a href="#"> ORDER </a></div>
      </div>




      <div class="ser">
        <img src="images/index_pimza.jpg"" />
        <p class=" cap"> PIZZA </p>
        <div class=" overlay">

        </div>
        <div class="button"><a href="#"> ORDER </a></div>
      </div>
      <div class="ser">
        <img src="images/index_sandwish.jpg" />
        <p class="cap"> SANDWICH </p>
        <div class="overlay"></div>
        <div class="button"><a href="#"> ORDER </a></div>
      </div>
    </div>
  </section>

    
    
    
    
    
    
    

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


  <section class="customer-logos slider">
    <div class="s3_text">&nbsp; TOP TRUSTED BRANDS : </div>
    <div class="brand">
      <div class="slide"><img src="images/kfc_logo.png" title="KFC"></div>
      <div class="slide"><img src="images/mc_logo.png" title="MacDonlad"></div>
      <div class="slide"><img src="images/sb_logo.webp" title="STARBUCKS"></div>
      <div class="slide"><img src="images/bk_logo.png" title="BURGER KING"></div>
      <div class="slide"><img src="images/dominos_logo.png" title="DOMINOS"></div>
      <div class="slide"><img src="images/pizzahut_logo.png" title="PIZZAHUT"></div>
      <div class="slide"><img src="images/biryani_logo.jpg" title="BIRYANI DUM HANDI"></div>

    </div>
    <div class="brand">
      <div class="slide"><img src="images/bbk_logo.jpg" title="BIRYANI BY KILOS"></div>
      <div class="slide"><img src="images/lapinoz_logo.png" title="LA PINOZ"></div>
      <div class="slide"><img src="images/dd_logo.png" title="DURKIN DONUTS"></div>
      <div class="slide"><img src="images/bbq_logo.jpg" title="BARBEQUE NATION"></div>
      <div class="slide"><img src="images/ppj_logo.jpg" title="PAPA JHONS PIZZA"></div>
      <div class="slide"><img src="images/sw_logo.png" title="SUBWAYS"></div>
      <div class="slide"><img src="images/pg_logo.png" title="PIZZA GELLERIA"></div>
    </div>
  </section>

  <section class="s4">

  <div class="con_s4">

    <div class="left">
        <h3 id="left_head">Get Your Order 24/7 <br>Right At Your Doorsteps</h3>
        <hr class="style2">
        <div id="subtext">
        <span id="left_subtext">Why step out when you can get everything delivered home with the tap of a button? FoodZilla’s favourite delivery site gets you favoirite Fast Food From your favourite store</span>
        </div>

        <div class="btn">
          <!-- HTML !-->
<button class="button-52" role="button" onclick="location='foodlist.php'">ORDER NOW</button>


        </div>
    </div>
    <div class="right">
        <img src="./images/index_s3.png">
    </div>
  </div>



  </section>

  <?php
include('../Online-Food-Order/include/footer.php');
?>

  
</body>

</html>