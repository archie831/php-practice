<!doctype html>
<html>
<head>
	<title>View</title>
</head>
<body>
<?php session_start();?>

<h2>Welcome, <?php echo $_SESSION['user_name'];?></h2>

<img src="image.png">

<p><strong>Account Information:</strong></p>

<div>Id number: <?php echo $_SESSION['user_id'];?></div><br/>
<div>Email address: <?php echo $_SESSION['user_email'];?></div><br/>

<button><a href='changepw.php' style='text-decoration:none'>Change password</a></button>
<br/><br/><br/><br/><br/><br/><br/>

<button><a href='logout.php' style='text-decoration:none'>Logout</a></button>

</body>
</html>