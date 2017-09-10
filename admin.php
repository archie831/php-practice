<!DOCTYPE HTML>
<html>
<head></head>
<body>

<?php session_start();?>

<h2>Welcome, <?php echo $_SESSION['user_name'];?></h2>

<p>You are now on the admin page where you can view all users and can change any user's data .</br>
	Admin doesn't have the capability to delete all user. Please contact developer to access database.
</p>


<img src="image.png"><br/>

<p><strong>Your account information:</strong></p>
<div><strong>Id number: </strong><?php echo $_SESSION['user_id'];?></div>
<div><strong>Username: </strong><?php echo $_SESSION['user_name'];?></div>
<div><strong>Password: </strong><?php echo $_SESSION['user_pw'];?></div>
<div><strong>Email address: </strong><?php echo $_SESSION['user_email'];?></div>
<div><strong>Level: </strong><?php echo $_SESSION['user_level'];?></div><br/>


<h3>View users</h3>
<?php
	if(isset($_GET['search'])){
		if($_GET['search']=='No results found'){
			echo "<strong style='color:red'>".$_GET['search']."</strong>";
		}
	}
	?>
<form action="searchprocess.php" method="post">
	<input type="search" name="words" maxlength="50" placeholder="Search for user accounts" />
	<input type="submit" value="Search" name="search" maxlength="50"/>
</form>
	
	<table border= "1" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email address</th>
				<th>Level</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		
		<p><strong>Database Status: </strong>
		<?php

		include'connect.php';
		echo '<br/><br/>';
		
		

		if(isset($_GET['msg'])){
			echo "<strong>Database Changes: </strong>".$_GET['msg'];
		}else{
			echo "<strong>Database Changes:</strong> None";
		}
			//accessing database
			$mysql_result = mysql_query("SELECT * FROM `users")
				or die("<br/><br/><strong>Error: </strong>".mysql_error());;
			//looping through database array and getting its (new) data
			//mysql_fetch_array() fetches the values of an array
			while($row = mysql_fetch_array($mysql_result)){
				
				$id = $row['id'];
				$username = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$level = $row['level'];
		?>
		
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $username; ?></td>
					<td><?php echo $password; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $level; ?></td>
					<td>
						<button><a href="editForm.php?edit=<?php echo $id;?>" style="text-decoration:none">Edit</a></button>
						<button><a href="delete.php?deleteUser=<?php echo $id;?>" style="text-decoration:none">Delete</a></button>
					</td>
				</tr>
		
		<!--End bracket of while loop is here-->
		<?php } ?>	

		</tbody>
	</table><br/><br/><br/>
	
	<button><a href='logout.php' style='text-decoration:none'>Logout</a></button>
	
</body>
</html>
