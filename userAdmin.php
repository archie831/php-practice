<!doctype html>
<html>
<head>
	<title>User admin</title>
</head>
<body>
<?php session_start();?>

<h2>Welcome, <?php echo $_SESSION['user_name'];?></h2>

<p>You are now on a user admin page where you can view all users but cannot change any data.</br>
	Only admin can change data from database.
</p>


<img src="image.png"><br/>

<p><strong>Your account information:</strong></p>
<div><strong>Id number: </strong><?php echo $_SESSION['user_id'];?></div>
<div><strong>Username: </strong><?php echo $_SESSION['user_name'];?></div>
<div><strong>Email address: </strong><?php echo $_SESSION['user_email'];?></div><br/>
<button><a href='userAdminChangepw.php' style='text-decoration:none'>Change password</a></button><br/><br/>

<h3>View users</h3>
<form action="searchprocess.php" method="post">
	<input type="search" name="words" maxlength="50" placeholder="Search for user accounts" />
	<input type="submit" value="Search" name="search" maxlength="50"/>
</form>

</form>
	
	<table border= "1" >
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>Email address</th>
				<th>Level</th>
			</tr>
		</thead>
		<tbody>
		
		<p><strong>Database Status: </strong>
		<?php

		include'connect.php';
		
			//accessing database
			//ORDER BY username makes the username arrange in alphabetical order
			$mysql_result = mysql_query("SELECT username,email,level FROM users ORDER BY username")
				or die("<br/><br/><strong>Error: </strong>".mysql_error());;
			//looping through database array and getting its (new) data
			//mysql_fetch_array() fetches the values of an array
			while($row = mysql_fetch_array($mysql_result)){
				
				$username = $row['username'];
				$email = $row['email'];
				$level = $row['level'];
		?>
		
				<tr>
					<td><?php echo $username; ?></td>
					<td>xxxx</td>
					<td><?php echo $email; ?></td>
					<td><?php echo $level; ?></td>
				</tr>
		
		<!--End bracket of while loop is here-->
		<?php } ?>	

		</tbody>
	</table><br/><br/><br/>


<button><a href='logout.php' style='text-decoration:none'>Logout</a></button>

</body>
</html>