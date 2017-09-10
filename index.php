<!doctype html>
<html>
<head>
	<title>Login</title>
</head>

<body>
	<h2>Login</h2>
	<!--<p><strong>Database Status: </strong><?php include 'connect.php';?></p>-->
	
	<?php
	if(isset($_GET['msg'])){
		if($_GET['msg']=='Successfully Regitered'){
			echo "<strong style='color:blue'>".$_GET['msg']."</strong><br/>";
		}else{
			echo "<strong style='color:red'>".$_GET['msg']."</strong><br/>";
		}
	}
	?>
	
	<form action="login.php" method='post'>
		<label for="username">Username:</label><br/>
		<input type="text" name="username" id="username"/><br/><br/>
		
		<label for="password">Password:</label><br/>
		<input type="password" name="password" id="password"/><br/><br/>
		
		<input type="submit" name="submit" value="Submit" >
	</form><br/>
	
	<p><strong>No account yet?</strong><br/>
		<a href='signup.php' style="text-decoration:none" >Click here to Sign Up</a>
	</p>
	
	
</body>
</html>