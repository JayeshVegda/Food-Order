<html>

<head>
  <title> Guest Signup | FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/managersignup.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<script type="text/javascript" src="js/sin.js"></script>


<body>

  <?php
  include('../Online-Food-Order/include/header.php');
  ?>

<?php /*
  < div class="cmyontainer">
    
      <div class="primary1">
        <div class="heading"> 
          <span id="">Create Account </span>
        </div>

        <div class="panel1">
          <form role="presentation" action="customer_registered_success.php" method="POST"  autocomplete="off" >
        <div class="v">
          <div class="group">  

           <input id="fullname" type="text" name="fullname"  required="" autofocus="">
           <span class="highlight"></span>
            <span class="bar"></span>
            <label for="fullname" >NAME</label>
           </div>

           <div class="group">      
           <input id="username" role="presentation" type="text" name="username"  required="">
           <span class="highlight"></span>
            <span class="bar"></span>
            <label for="username" >USERNAME</label>
           </div>

           <div class="group">      
           <input class="email" id="email" type="email" name="email"  required="">
           <span class="highlight"></span>
            <span class="bar"></span>
            <label for="Email" > EMAIL </label>
           </div>

           <div class="group">      
           <input class="contact" id="contact" type="text" name="contact"   required="">
           <span class="highlight"></span>
            <span class="bar"></span>
            <label for="contact" >PHONE NUMBER</label>
           </div>

           <div class="group">      
           <input class="password" id="password" type="password" name="password" autocomplete="new-password" required="">
           <span class="highlight"></span>
            <span class="bar"></span>
            <label for="password" >PASSWORD</label>
           </div>
           </div>


        



        <div class="btn">
        <button class="button-81" type="submit" role="button">SUBMIT</button>
        </div>

        <?php /* <label class="t2_">or</label> <br>
        <label class="t2_"><a href="customerlogin.php">Have an account? Login.</a></label> 
        </form>

      </div>

   

  </div>
  </div-->> */ ?>

<div class='center'>
	<div class='signUp'>
		<div class='left'>
			<div class='back'>
        <img src="images/bg_reg01.jpg">
      </div>	
		</div>
		<div class='right'>
      	<h1 id="sign_text">Sign Up</h1>
          <h1 id="sign_subtext">Lets Create an account</h1>
          
			<form role="presentation" action="customer_registered_success.php" method="POST">
				
      
				
          <div class='field'>
					<div class='input-bordered' >
          <input id="fullname" type="text" name="fullname"  required="" placeholder="FULL NAME" autofocus="">
					</div>	
				</div>

				<div class='field'>
					<div class='input-bordered'>
					<input id="username" onkeypress="return AvoidSpace(event)" name="username"  required="" placeholder="USERNAME" autofocus="">
					</div>
				</div>

        <div class='field'>
					<div class='input-bordered'>
          <input id="email" type="email" name="email" onkeypress="return AvoidSpace(event)" required="" placeholder="EMAIL" autofocus="">
					</div>
				</div>

        <div class='field'>
					<div class='input-bordered'>
          <input id="password" type="password" name="password"  required="" placeholder="PASSWORD" autocomplete="new-password" autofocus="">
					</div>
				</div>

			
        <div class='field'>
					<div class='input-bordered'>
          <input id="contact" type="text" name="contact" onkeypress="return AvoidSpace(event)" required="" placeholder="PHONE NUMBER" autofocus="">
					</div>
				</div>

        
        <div class='field'>
					
          <textarea id="address" type="text" name="address" required="" placeholder="ENTER HOME ADDRESS" autofocus=""></textarea>
					
				</div>

        

				<div class='field'>
					<input type='submit' role="button" value='Sign Up' />
				</div>	

			</form>	
		</div>	
	</div>	
</div>	

</body>

</html>