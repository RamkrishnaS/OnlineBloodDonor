<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

//connect to db
$connect = mysql_connect("localhost","root","") or die("not connecting");
mysql_select_db("blooddonor") or die("no db :'(");
$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");

$numrows = mysql_num_rows($query);


if ($numrows!=0)
{
//while loop
$_SESSION['username'] = $username;
 echo "1";
  }
  
   else
     echo "0";

 
?>