<!doctype html>
<html>
<head>
	<title>Change password</title>
</head>
<body>
<h2>Change password</h2>

<?php
	
	if(isset($_GET['msg'])){
		if($_GET['msg']=='Successfully changed password'){
			echo "<strong style='color:blue'>".$_GET['msg']."</strong><br/>";
		}else{
			echo "<strong style='color:red'>".$_GET['msg']."</strong><br/>";
		}
	}
?>

<form action="editpw.php" method="post">
	
	<label for="currentPassword">Current password:</label></br>
	<input type="password" name="currentPassword" id="currentPassword"/></br></br>
	
	<label for="newPassword1">New password</label></br>
	<input type="password" name="newPassword1" id="newPassword1"/></br></br>
	
	<label for="newPassword2">Confirm new password</label></br>
	<input type="password" name="newPassword2" id="newPassword2"/></br></br>

	<input type="submit" name="change" value="Change"/>
</form><br/>

<p><strong>Note:</strong> Change password will take effect after logging out.<p><br/><br/><br/><br/>

<h3><a href="user.php" style="text-decoration:none"> << Go back</a></h3>

</body>
</html>