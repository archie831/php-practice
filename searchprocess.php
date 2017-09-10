<?php

include 'connect.php';

if(isset($_POST['search'])){
	
	$words = $_POST['words'];
	
	if(empty($words)){
		$msg = 'No results found';
		header('Location:admin.php?search='.$msg);
	}else{
		
		$query = mysql_query("SELECT * FROM `users` WHERE `username` LIKE '%words%'");
		
		while($row = mysql_fetch_array($query)){
			$id = $row['id'];
			$username = $row['username'];
			$password = $row['password'];
			$email = $row['email'];
			$level = $row['level'];
			
			echo $username;
			
		}
	}
}














?>