<?php

include 'connect.php';

if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username)||empty($password)){
		$msg = 'All fields are required';
		header('Location:index.php?msg='.$msg);
	}else{
		$query = mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' ");
		//mysql_num_rows() returns the number of rows in the result set
		$count = mysql_num_rows($query);
		
		$allQuery = mysql_query("SELECT * FROM `users`");
		$allUser = mysql_fetch_array($allQuery);
		
		if($count==1){
		
			//fetches the values of $query makes it an array named $row
			$row = mysql_fetch_array($query);
			$session_id = $row['id'];
			$session_username = $row['username'];
			$session_pw = $row['password'];
			$session_email = $row['email'];
			$session_level = $row['level'];
			
			/*
			When you work with an application, you open it, do some changes, and then you close it. 
			This is much like a Session. The computer knows who you are. 
			It knows when you start the application and when you end. 
			But on the internet there is one problem: the web server does not know who you are or what you do, 
			because the HTTP address doesn't maintain state.
				Session variables solve this problem by storing user information to be used across multiple pages
				Tip: If you need a permanent storage, you may want to store the data in a database.
			An associative array containing session variables available to the current script
			
			The location of the temporary file is determined by a setting in the php.ini file called session.save_path. 
			Before using any session variable make sure you have setup this path.
			*/
			
			session_start();
			
			   $_SESSION['user_id'] = $session_id;
			 $_SESSION['user_name'] = $session_username;
			   $_SESSION['user_pw'] = $session_pw;
			$_SESSION['user_email'] = $session_email;
			$_SESSION['user_level'] = $session_level;
			   $_SESSION['allUser'] = $allUser; 
			   
			if($session_username == "admin" && $session_pw == "admin" && $session_level == 2 ){
				header('Location:admin.php');
			}elseif($session_level == 1){
				header('Location:userAdmin.php');
			}else{
				header('Location:user.php');
			}
		}else{
			
			$msg = 'Incorret username or password';
			header('Location:index.php?msg='.$msg);
		}
	}
	
}





?>