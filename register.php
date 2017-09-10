<?php

include 'connect.php';

if(isset($_POST['signup'])){
	
	$username  = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$email 	   = $_POST['email'];
	$level 	   = $_POST['level'];
	$msg 	   = 'Successfully Registered';
	
	if(empty($username)||empty($password1)||empty($password2)||empty($email)){
		$msg = 'All fields are required';
		header('Location:signup.php?msg='.$msg);
	}else{
		if($password1!=$password2){
		$msg = 'Password does not match';
		header('Location:signup.php?msg='.$msg);
		}else{
			mysql_query("INSERT INTO `users`(`id`, `username`, `password`, `email`,`level`)
			VALUES('', '$username', '$password1', '$email','$level')") or die($database_error());
			header('Location:signup.php?msg='.$msg);
		}
	}
}
?>