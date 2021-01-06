<?php
session_start();
#echo $_SESSION['stdid'];
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login || CAC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(https://whataftercollege.com/wp-content/uploads/2019/11/kissclipart-group-of-college-students-clipart-student-stock-ph-9f66aeb9736b3761.png">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="GET">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username" id="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password" id="pass">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="#" class="txt1">
								Not Registered ?? Sign up Here
							</a>
						</div>
					</div>
					<br></br><br></br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="button" value="Login" id="butlogin">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script type="text/javascript">
    $(document).ready(function() {
		$('#butlogin').on('click', function() {
		var stdid = $('#username').val();
		var password = $('#pass').val();
		
		if(stdid!="" && password!="" ){
			$.ajax({
				url: "checklogin.php",
				type: "POST",
				data: {	
					stdid: stdid,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.loginStatus==123){
						alert('Login success');
						location.href = "home.php";						
					}
					else if(dataResult.loginStatus==456){
						alert('Invalid id or password');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
	});
</script>

</body>
</html>