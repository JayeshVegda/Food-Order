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
  <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
  <script>
$(document).ready(function(){
  $(".dropdown-toggle").dropdown("toggle");
});
</script>
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
    		<a href="add_food_items.php" class="list-group-item active">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
        <a href="contactus1.php" class="list-group-item">Customer Feedback</a>
    	</div>
    </div>


    


      <div class="col-xs-9">
        <div class="form-area" style="padding: 0px 100px 100px 100px;">
          <form action="add_food_items1.php" method="POST">
            <br style="clear: both">
            <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FOOD ITEM HERE </h3>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
              </div>     
              <div class="form-group">
                <input type="text" class="form-control" id="price" name="price" placeholder="Your Food Price (INR)" required="">
              </div>

              <div class="form-group">
              <select name="r_name" id="meun-items">
        <option disabled selected> Select Restaurant </option>
        <option value="LaPinoz"> La Pinoz </option>
        <option value="Dominos"> Dominos </option>
        <option value="D Pizza"> D Pizza </option>
        <option value="The SandWich"> The SandWich </option>
        <option value="US PIZZA"> US PIZZA </option>

        
      </select>
      </div>
              
              <div class="form-group">
                <input type="text" class="form-control" id="s_text" name="s_text" placeholder="Your Food Ingredients Highlight" required="">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="" value="./images/product/">
              </div>

              <div class="form-group">
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Your Food Description" required=""></textarea>
              </div>
              
              <div class="form-group">
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD FOOD </button>    
              </div>
           </form>
          </div>
      </div>
  </div>
 </body>
</html>