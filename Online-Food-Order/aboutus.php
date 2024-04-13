<?php
session_start();
?>

<html>

<head>
    <title> About | FOOD ZILLA </title>
</head>


<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/aboutus.css">
<link rel="stylesheet" type="text/css" href="./css/fonts/font.css">
<link rel="stylesheet" type="text/css" href="./css/fonts/all.min.css">

<body>
    <?php
    include('../Online-Food-Order/include/header.php');
    ?>


    <section data-aos="fade-up" id="s1">
        <div class="con1">
            <img id="vector1" src="images/18771.jpg">
            <span id="main_text"> WHO ARE WE ?</span>
            <a data-scroll href="#s2">
                <div class="arrow"></div>
            </a>
        </div>
    </section>

    <section data-aos="fade-up" id="s2">
        <div class="con2">
            <div id="main_text_s2">
                <span>WHO ARE WE ? </span>
            </div>

            <div id="sub_text_s2">
                <p>Our technology platform connects customers, restaurant partners and delivery partners, serving their multiple needs. Customers use our platform to search and discover restaurants, read and write customer generated reviews and view and upload photos, order food delivery, book a table and make payments while dining-out at restaurants. On the other hand, we provide restaurant partners with industry-specific marketing tools which enable them to engage and acquire customers to grow their business while also providing a reliable and efficient last mile delivery service. We also operate a one-stop procurement solution, Hyperpure, which supplies high quality ingredients and kitchen products to restaurant partners. We also provide our delivery partners with transparent and flexible earning opportunities.</p>
            </div>


        </div>
    </section>

    <section data-aos="fade-up" id="team">

    <div class="faqq">
    <div class="centerplease">
  FAQ accordion
</div>
<br>

<div class="content">
<div>
  <input type="checkbox" id="question1" name="q"  class="questions">
  <div class="plus">+</div>
  <label for="question1" class="question">
  What is FoodZilla for Business
  </label>
  <div class="answers">
  FoodZilla for Business is a dedicated site to help restaurant owners and managers connect and engage with their customers.
</div>
</div>

<div>
  <input type="checkbox" id="question2" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question2" class="question">
    How to order food through FOODZILLA
  </label>
  <div class="answers">
    This is How You can Order: <br>
    &nbsp; &nbsp;   1. Register OR Login your Account <br>
    &nbsp; &nbsp;   2. Choose your favorite restaurants and select the meal of your choice. <br>
    &nbsp; &nbsp;   3. Now simply click 'Checkout' and Proccess to payments <br>
    &nbsp; &nbsp;   4. Choose your Payment Method
  </div>
</div>
  
<div>
  <input type="checkbox" id="question3" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question3" class="question">
  I want to provide feedback 
  </label>
  <div class="answers">
    You can visit Contact page to send feedback
  </div>
</div>


<div>
  <input type="checkbox" id="question4" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question4" class="question">
  Is there a minimum order value? 
  </label>
  <div class="answers">
  We have no minimum order value and you can order for any amount. 
  </div>
</div>


<div>
  <input type="checkbox" id="question5" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question5" class="question">
  How long do you take to deliver?
  </label>
  <div class="answers">
  Standard delivery times vary by the location selected and prevailing conditions. Once you select your location, an estimated delivery time is mentioned for each restaurant.
  </div>
</div>


<div>
  <input type="checkbox" id="question6" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question6" class="question">
  Can I pay for an order using two payment methods?
  </label>
  <div class="answers">
  No, currently we only accept cash on delivery as a form of payment.
  </div>
</div>



</div>
</div>
</section>

    <section data-aos="fade-up" id="abt">
        <div class="con_abt">
            <div class="add1">
                <h3 id="head_abt"> CONTACT US </h3>
                <i class="fa fa-briefcase" id="sub_abt"> EMAIL : JAYESHVEGDA@GMAIL.COM</i><BR>
                <i class="fa fa-envelope" id="sub_abt"> EMAIL : OFFICE0101@GMAIL.COM</i><BR>
                <i class="fa fa-envelope" id="sub_abt"> EMAIL : OFFICEJAMNAGAR@YAHOO.COM</i><BR>
                <i class="fa fa-phone" id="sub_abt"> PHONE : +91 9510233829 </i><BR>
                <i class="fa fa-phone" id="sub_abt"> PHONE : +91 9510233830 </i><BR>
                <i class="fa fa-phone" id="sub_abt"> LANDLINE : +0288 99292</i><BR>
            </div>

            <div class="add1">
                <h3 id="head_abt"> ADDRESS </h3>

                <span class="glyphicon glyphicon-map-marker"> HEADQUATER :- <br> &nbsp;&nbsp;&nbsp;&nbsp; Saru Section Rd, Opp. Modi School,<br> &nbsp;&nbsp;&nbsp;&nbsp; Industrial Estate, Jamnagar, <br> &nbsp;&nbsp;&nbsp;&nbsp; Gujarat 361008</span><br>

                <span class="glyphicon glyphicon-map-marker"> BRANCH :- <br> &nbsp;&nbsp;&nbsp;&nbsp; 1D, Ground Floor & First Floor, Cross, <br> &nbsp;&nbsp;&nbsp;&nbsp; Bedi Rd, Paras Society, Jamnagar, <br> &nbsp;&nbsp;&nbsp;&nbsp; Gujarat 361008</span><br>

            </div>
            <div class="img_abt">
                <img src="images/MAP.png" alt="Thumb">
            </div>
        </div>
    </section>



</body>
<?php
include('../Online-Food-Order/include/footer2.php');
?>

</html>