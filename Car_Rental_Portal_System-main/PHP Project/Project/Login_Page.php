<html >
<head><title>Login page</title>
 <link href="css/StyleSheet.css" rel="stylesheet"/>
 <link href="https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css" rel="stylesheet" />

</head>

<body>
	<?php if(isset($_GET['error'])){?>
		<center><p class="error"> <?php echo $_GET['error'];?></p></center>
	<?php } ?>
	
	
<div class="login-wrap" >
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			
			<div class="sign-in-htm" >
				<form method="post" action="validate_login.php" >
				<div class="group">
					<br/><br/><br/>
					<label for="user" class="label">Email</label>
					<input id="user" name="email" placeholder="Email..." type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<br/>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div><br/>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<!-- <div class="hr"></div> -->
				<!-- <div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div> -->
				</form>
			</div>
			<div class="sign-up-htm"><br/>
				<form  method="post" action="validate_registration.php">
				<div class="group">
					<label for="pass" class="label">Name</label>
					<input id="pass" name="username" type="text" placeholder="Full name.." class="input" required>
				</div>
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" name="email" type="text" placeholder="Email...." class="input" required>
				</div>
				<div class="group">
					<label for="contact" class="label">Contact No</label>
					<input id="contact" name="contact" type="text" class="input" >
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" name="repassword" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
					<div class="foot-lnk">
					<div class="hr"></div>
					<label for="tab-1">Already Member?</label>
				</div>
				</div>
				
					</form>

			</div>
		</div>
	</div>
<img src="images/ola_login.jpg">
</div>
</body>
</html>