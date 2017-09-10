<!doctype html>
<html>
<head>
	<title>Sign Up</title>
</head>

<body>
	<h2>Sign Up</h2>
	
	<!--<p><strong>Database Status: </strong><?php include 'connect.php';?></p>-->
	
	<?php
	if(isset($_GET['msg'])){
		if($_GET['msg']=='Successfully Registered'){
			echo "<strong style='color:blue'>".$_GET['msg']."</strong><br/>";
		}else{
			echo "<strong style='color:red'>".$_GET['msg']."</strong><br/>";
		}
	}
	?>
	<form action="register.php" method="post">
		<label for="username">Username:</label><br/>
		<input type="text" name="username" id="username"/><br/><br/>
		
		<label for="password1">Password:</label><br/>
		<input type="password" name="password1" id="password1"/><br/><br/>
		
		<label for="password2">Confirm Password:</label><br/>
		<input type="password" name="password2" id="password2"/><br/><br/>
		
		<label for="email">Email Address:</label><br/>
		<input type="email" name="email" id="email"/><br/><br/>
		
		<input type="hidden" name="level" value="0"/>
		
		<input type="submit" name="signup" value="Sign Up" >
	</form></br>
	
	<p><strong>Already have an account?</strong><br/>
		<a href="index.php" style="text-decoration:none">Click here to Login</a>
	</p>
	
</body>
</html>