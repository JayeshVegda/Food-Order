<?php
session_start();
?>

<html>

<head>
  <title> Contact | FOOD ZILLA </title>
</head>

<link rel="stylesheet" type="text/css" href="css/contactus.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheer" type="text/css" href="css/bootstrap/bootstrap.css">

<body>

  <?php
  include('../Online-Food-Order/include/header.php');
  ?>





  <div class="contact-container">
    <div class="left-col">

    </div>
    <div class="right-col">


      <h1 id="head_text">Contact us</h1>
   

      <form id="contact-form3" method="post">

        <label id="lbl" for="name">Full name</label>
        <input type="text" id="input1" name="name" placeholder="Your Full Name" required>

        <label id="lbl" for="email">Email Address</label>
        <input type="email" id="input1" name="email" placeholder="Your Email Address" required>

        <label id="lbl" for="mobile">Phone Number</label>
        <input type="number" id="input1" name="mobile" placeholder="Your Phone Number" required>

        <label id="lbl" for="subject">Subject</label>
        <input type="text" id="input1" name="subject" placeholder="Your Subject for feedback" required>

        

        <label id="lbl" for="message">Message</label>
        <textarea rows="6" placeholder="Your Message" id="message2" name="message" required></textarea>

        <button type="submit" id="submit1" name="submit">Send</button>

      </form>
      <div id="error"></div>
      <div id="success-msg"></div>
    </div>
  </div>


  <?php
  if (isset($_POST['submit'])) {
    require 'connection.php';
    $conn = Connect();

    $Name = $conn->real_escape_string($_POST['name']);
    $Email_Id = $conn->real_escape_string($_POST['email']);
    $Mobile_No = $conn->real_escape_string($_POST['mobile']);
    $Message = $conn->real_escape_string($_POST['message']);
    $Subject = $conn->real_escape_string($_POST['subject']);

    $query = "INSERT into contact(Name,Email,Mobile,Message,Subject) VALUES('$Name','$Email_Id','$Mobile_No','$Message','$Subject')";
    $success = $conn->query($query);

    if (!$success) {
      die("Couldnt enter data: " . $conn->error);
    }

    $conn->close();
  }
  ?>


</body>


</html>