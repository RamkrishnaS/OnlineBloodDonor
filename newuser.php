<html>
<head>
<title> Online Blood Donation References | New User </title>
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "css/style.css">
<style type="text/css">
	input{
		padding: 13px !important;
	}
</style>
<script text="text/javascript" src="js/jquery.js"></script>
<script text="text/javascript">
$(document).ready(function(){ 
			$("#register").click(function(){
				var name = $("#name").val();
				var age = $("#age").val();
			    var gender = $("#gender").val();
				var bloodgroup = $("#bloodgroup").val();
				var phone = $("#phone").val();
				console.log(phone);
				var email = $("#email").val();
				var address = $("#address").val();
				var city = $("#city").val();
				var username = $("#username").val();
				var password = $("#password").val();
				var confirmpassword = $("#confirmpassword").val();
				var checkbox = $("#iagree").val();

				if(name == "" || age == "" || gender == "" || bloodgroup == "" || phone == "" || email == "" || address == "" || city == "" || username == "" || password == "" || confirmpassword == "" ){				
					$("#alert").css("display","block");
					$("#alert").html("Please fill all the fields!");
					$("#alert").hide();			
					$("#alert").show();
				}
				else if(password != confirmpassword){
					
					$("#alert").css("display","block");
					$("#alert").html("Your passwords do not match!");
					$("#alert").hide();			
					$("#alert").fadeIn(1500);
				}
				else if(document.form1.box1.checked == false)
				{
				    $("#alert").css("display","block");
					$("#alert").html("Please check the check box!");
					$("#alert").hide();
					$("#alert").fadeIn(1500);
				}
				else{
				$.post('registerfunction.php', {name: name,age: age,gender: gender,bloodgroup: bloodgroup,phone: phone,email: email,address: address,city: city, username: username, password: password},
				function(data){
					console.log(data);
					$("#alert").css("display","block");
					$("#alert").html(data);
					$("#alert").hide();			
					$("#alert").fadeIn(1500);
					$("#name").val("");
					$("#age").val("");
					$("#gender").val("");
					$("#bloodgroup").val("");
					$("#phone").val("");
					$("#email").val("");
					$("#address").val("");
					$("#city").val("");
					$("#username").val("");
					$("#password").val("");
					$("#confirmpassword").val("");
					document.form1.box1.checked=false;
				});	
				
				}
				return false;
});

});

</script>
</head>
<header>
<?php include 'menubar.php' ?>
</header>
<body>
<div class="container">
<div id="newuserform">
<form name="form1" id="newuser">
  <fieldset>
    <legend>New User</legend>
<div id="newusercontent">
<label>Name</label>
    <input type="text" id="name" placeholder="Name">
<label>Age</label>
    <input type="text" id="age" placeholder="Age">
<label>Gender</label>
    <input type="text" id="gender" placeholder="Gender">
<label>Blood Group</label>
    <input type="text" id="bloodgroup" placeholder="Blood Group">
<label>Phone Number</label>
    <input type="text" id="phone" placeholder="Phone">
<label>Email Id</label>
    <input type="text" id="email" placeholder="example@example.com">
<label>Address</label>
    <input type="text" id="address" placeholder="Address">
<label>City</label>
    <input type="text" id="city" placeholder="City">
<label>Username</label>
    <input type="text" id="username" placeholder="Username">
<label>Password</label>
    <input type="password" id="password" placeholder="Password">
<label>Confirm Password</label>
    <input type="password" id="confirmpassword" placeholder="Confirm Password">
<br>
<input type="checkbox" name="box1" id="iagree"> I agree for the terms and conditions</input>
    <br>
	<a href="tc.php">Terms and conditions </a>
	<br><br>
    <button class="btn btn-primary" id="register">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn" href="index.php">Back</a>
<div id="alert" class="alert" style="display:none;">
 
</div>
</div> <!-- End newusercontent div -->
  </fieldset>
</form></div>
<div id="instructionWrapper">
<?php include 'instructions.php'; ?>
</div>
</div>
</body>
<footer> &COPY; Copyright, Blood Donor.Org , All rights reserved 2012-2013</footer>
</html>
