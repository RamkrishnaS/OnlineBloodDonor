<?php
session_start();
if(isset($_SESSION['username']))
{
	?>

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

<header>
<body>
    <div id="searchwrapper">
<form id="search" action="searchfunction.php" method="post">
  <fieldset>
    <legend>Search</legend>
    <label>Blood Group</label>
    <input type="text" placeholder="Blood Group" name="bloodgroup">
    <label>City</label>
    <input type="text" placeholder="City" name="city">
    <span class="help-block"></span>
    
    <button type="submit" class="btn">Search</button>
  </fieldset>
</form>
        </div>
</body>
<footer> &COPY; Copyright, Blood Donor.Org , All rights reserved 2012-2013</footer>
</html>
<?php 
}
else
{
	header("Location: index.php");
}
?>
