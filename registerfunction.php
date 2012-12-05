<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  echo('Could not connect to database. Please try later! ');
  }
else{
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$bloodgroup = $_POST["bloodgroup"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$username = $_POST["username"];
$password = $_POST["password"];

mysql_select_db("blooddonor", $con);
//$sql="INSERT INTO users (name, age, gender, bloodgroup, phone, email, address, city, username, password) VALUES('$name', $age, '$gender', '$bloodgroup', $phone, '$email', '$address', '$city', '$username', '$password')";

mysql_query("INSERT INTO users (name, age, gender, bloodgroup, phone, email, address, city, username, password) VALUES('$name', $age, '$gender', '$bloodgroup', $phone, '$email', '$address', '$city', '$username', '$password')");

echo '<strong>Welcome!</strong> You are a new blood donor from today.';
//echo $sql;
}

mysql_close($con);
?>
