<?php
session_start();
if(isset($_SESSION['username'])){
 header('Location: search.php');
}
else
{
?>

<html>
<head>
<title> Online Blood Donor Management</title>
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<script text="text/javascript" src="js/jquery.js"></script>
</head>
<header>
<img src="img/1255397692.jpg">
<?php include 'menubar.php'?>
</header>

<body>
<div class="row-fluid" id="mainWrapper">
  <div class="span12">
<div id="rolltext">
    <marquee> Blood camp to be conducted by the Rotary Club on 10<sup>th</sup> November 2012 at CMRIT, ITPL Road, Bangalore </marquee>
</div>
    <div class="row-fluid">
      <div class="span8" id="about"><?php include 'about.php'?></div>
      <div class="span3" id="loginWrapper"><?php include 'login.php'?></div>
    </div>
  </div>
</div>
</body>
<footer> &COPY; Copyright, Blood Donor.Org , All rights reserved 2012-2013</footer>
</html>
<?php

}
?>