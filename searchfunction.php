<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
</head>
<header>
<div class="navbar navbar-inverse" style="position: static;">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">Blood Donor</a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">       
			<li class="active" id="logout"><a href="logout.php">Logout</a></li>
                      </ul>
		
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
</header>
<body>
<div id="searchwrapper">
<?php
$bloodgroup = $_POST["bloodgroup"];
$city = $_POST["city"];
$connect = mysql_connect("localhost","root","") or die("not connecting");
mysql_select_db("blooddonor") or die("no db :'(");
$query="SELECT name,age,gender,bloodgroup,phone,email,city FROM users WHERE bloodgroup='$bloodgroup' AND city='$city' ";
$result=mysql_query($query);
$numrows=mysql_num_rows($result);
//$r2=mysql_fetch_rows($result);
if($numrows==0)
{
  printf("<script>location.href='references.php'</script>");
    
}


?>
<table class="table table-hover table-striped">
<thead>
<tr>
<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Age</font></th>
<th><font face="Arial, Helvetica, sans-serif">gender</font></th>
<th><font face="Arial, Helvetica, sans-serif">Bloodgroup</font></th>
<th><font face="Arial, Helvetica, sans-serif">Phonenumber</font></th>
<th><font face="Arial, Helvetica, sans-serif">Email</font></th>
<th><font face="Arial, Helvetica, sans-serif">City</font></th>
</tr>
</thead>
<tbody>
<?php
$i=0;
while ($i < $numrows) {
$r2=mysql_fetch_array($result);
	$f1=$r2['name'];
	$f2=$r2['age'];
	$f3=$r2['gender'];
	$f4=$r2['bloodgroup'];
	$f5=$r2['phone'];
	$f6=$r2['email'];
	$f7=$r2['city'];
	$i++;
?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
</tr>

<?php
}
mysql_close();
?>
</tbody>
</table>
</div>

</body>
<footer> &COPY; Copyright, Blood Donor.Org , All rights reserved 2012-2013</footer>
</html>