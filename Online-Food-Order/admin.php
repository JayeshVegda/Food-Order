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
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
    }
  </script>

  <body>

  
  <?php
        include('../Online-Food-Order/include/header.php');
      ?>

<div class="atom-panel atom-panel--left left">
  <nav class="atom-toolbar atom-toolbar-vertical expanded">
    <a href="#" class="btn btn-default">
      <span class="octicon octicon-dashboard"></span>
      <span class="title">Dashboard</span>
    </a>
    <a href="add_food_items.php" class="btn btn-default">
      <span class="octicon octicon-beaker"></span>
      <span class="title">My Resturent</span>
    </a>
    <a href="#" class="btn btn-default">
      <span class="octicon octicon-terminal"></span>
      <span class="title">Console</span>
    </a>
    <a href="#" class="btn btn-default">
      <span class="octicon octicon-telescope"></span>
      <span class="title">Sourcerer</span>
    </a>
    <a href="#" class="btn btn-default">
      <span class="octicon octicon-desktop-download"></span>
      <span class="title">Scraper</span>
    </a>
    <hr class="atom-toolbar-spacer">
    <a href="#" class="btn btn-default">
      <span class="octicon octicon-file-directory"></span>
      <span class="title">Files</span>
    </a>
    <a href="#" class="btn btn-default">
      <span class="octicon octicon-gear"></span>
      <span class="title">Settings</span>
    </a>
    <div class="atom-toolbar-toggle-button left atom-toolbar-toggle-button-visible expanded">
      <div class="atom-toolbar-toggle-button-inner left">
        <span class="octicon octicon-chevron-left"></span>
      </div>
    </div>
  </nav>
</div>