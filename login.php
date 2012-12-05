
<html>
<head>
<title>Online blood references | login</title>
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<script text="text/javascript" src="js/jquery.js"></script>
<script text="text/javascript">
	
	$(document).ready(function(){
	
	$("#login").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		console.log(username+"     "+password);
		$.post("loginfunction.php",{username:username, password:password},function(data){
			if(data == "1")
			{
				window.location = "search.php";
			}
			else
			{
				$("#errorMessage").html("Incorrect Username/Password");
				$("#errorMessage").css('display','block').hide().show(200);
			}
			});
	});
		
	});
		
	
</script>
</head>
<body>  
    <legend>Login</legend>
    <label>Username</label>
    <input type="text" id="username" name="username" placeholder="Username">
    <label>Password</label>
    <input type="password" id="password" name="password" placeholder="Password">
    <span class="help-block"></span>
    <button class="btn btn-primary" id="login" >Login</button>
 	<a href="newuser.php" style="margin-left:10px;">New User? </a>
	<br>
	<br>
	<div id="errorMessage" class="alert alert-error" style="display:none;"> </div>
	
<img src="img/bd.jpg"><br><br><br>
<b><u>Emergency Contact Details</u></b>
<br><br>
<b>Phone:</b><br> 080-111000, 080-222000<br>
<b>Email Id:</b><br> helpcenter@blooddonor.org<br>
</body>
</html>