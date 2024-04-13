<?php
session_start();
?>

<html>

  <head>
    <title> About | FOOD ZILLA </title>
  </head>


  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href ="css/service.css">
  <link rel="stylesheet" type="text/css" href="fonts/font.css">
  
  <body>
      <?php
        include('../Online-Food-Order/include/header.php');
      ?>

    <section id="s1" data-aos="fade-up">
        <div class="con_s1">
            <div class="s1_con_s1">
                <h2 id="head_text"> OUR SERVICE</h2>
                <h2 id="head_text_2">ANY TIME <br>  ANY FOOD<BR> ANY WHERE ... </h2>
                <span id="s1_text">get your favourite food delivered to your <br> &emsp; &ensp; doorstep from your choice of restaurant </span>
            </div>
            <div class="s1_con_s2">
            <img src="images/bg_service.jpg" alt="Thumb">
            </div>
        </div>
    </section>
    
    <section id="s2" data-aos="fade-up" > 
    <div class="header2">
    
    <h1 id="s2_head">OUR SERVICE features </h1>

    <p ID="s2_subhead">we build products & solutions that redefine the food ordering & delivery space in India, every single day.</p>
  </div>
  <div class="row1-container1">
    <div class="box2 box-down cyan">
      <h2 id="s2_text">No Minimum Order</h2>
      <p id="s2_subtext">Order in for yourself or for the group, with no restrictions on order value</p>
 
    </div>

    <div class="box2 red">
      <h2 id="s2_text" >Lightning-Fast Delivery</h2>
      <p id="s2_subtext" >Experience  superfast delivery for food delivered fresh & on time</p>
      
    </div>

    <div class="box2 box-down blue">
      <h2 id="s2_text" >Doorstap Deliver</h2>
      <p id="s2_subtext">Get your favourite food at your doorstap</p>
      
    </div>
  </div>

  <div class="row2-container2">
    <div class="box2 orange">
      <h2 id="s2_text" >24/7 Work</h2>
      <p id="s2_subtext" >No time restrictions, Order food anytime & anywhere</p>
     
    </div>
  </div>
    </section>



    <section id="s3" data-aos="fade-up" > 
      
    <h1 id="s3_head"> HOW IT WORKS ? </h1>
    <h1 id="s3_sub_head"> EASY AS THAT </h1>

    <div class="s3_con">
    <div id="s3_box"> 
      <img src="images/service_01.jpg">
      <h1 id="s3_box_head"> SELECT YOUR FOOD </h1>
      <label id="s3_box_subtext">select your favourite food list, to cart and proccess to pay via online or cash on delivery</label>
    </div>
    <div id="s3_box"> 
    <img src="images/service_02.jpg">
    <h1 id="s3_box_head"> &emsp; DOORSTAP DELIVERY </h1>
    <label id="s3_box_subtext">enter your correct adress and phone number and wait for your food</label>
    </div>
    
    <div id="s3_box">
      <img src="images/service_03.jpg">
      <h1 id="s3_box_head"> ENJOY YOUR FOOD </h1>
      <span id="s3_box_subtext"> got your fresh food? now enjoy your food and give a Honest review about it </span>
    </div>
  </div>
    </section>

    
  </body>
  <?php
include('../Online-Food-Order/include/footer2.php');
?>
</html>