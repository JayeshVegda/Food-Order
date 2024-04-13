    <?php
include('login_m.php'); // Includes Login Script

if(isset($_SESSION['login_user1'])){
header("location: view_food_items.php"); //Redirecting to myrestaurant Page
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | FOOD ZILLA </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body id="bg_body">

  <?php
        include('../Online-Food-Order/include/header.php');
      ?>
      
<?php /*
    <div class="container">
    <div class="jumbotron">
     <h1>Hi Manager,<br> Welcome to <span class="edit"> FOOD ZILLA </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>

          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="managersignup.php">Create a new account.</a></label>
       

        </form>

        </div>
        
      </div>
      
    </div>
  */?>




<div class="container1" id="container1">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" id="a_link"class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" id="a_link"class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" id="a_link"class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>


	<div class="form-container sign-in-container">
    
		<form action="" method="POST">
			<h1 id="sign_text">WELCOME ADMIN </h1>
			
			<span id="sub_text">GOOD TO SEE YOU AGAIN</span>

      <label for="username"> </label>
			<input  id="username" type="text" name="username" placeholder="Username" required="" autofocus="" />

      <label for="password"> </label>
			<input  id="password" autocomplete="new-password" type="password" name="password" placeholder="Password" required="" />
			
			<button id="btn" name="submit" type="submit" value=" Login ">Sign In</button>
      </form>


      <form action="customersignup.php" >
      <br><br>


<div class="reg_panel">
  <h2 id="reg_text">

  </h2>
  
</div>
</form>
	</div>

 

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
     
			</div>
			<div class="overlay-panel overlay-right">
        <img id="bg_managerlogin" src="images/bg_managerlogin.png">
				
				
			</div>
		</div>
	</div>
</div>


  </body>
</html>