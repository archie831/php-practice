<?php
include'connect.php';

session_start();

if(isset($_POST['change'])){
	
	$currentpw = $_POST['currentPassword'];
		  $pw1 = $_POST['newPassword1'];
		  $pw2 = $_POST['newPassword2'];
	  $user_id = $_SESSION['user_id'];
	  $user_pw = $_SESSION['user_pw'];
	
	if(empty($currentpw)||empty($pw1)||empty($pw2)){
		$msg = "All fields are required";
		header('Location:changepw.php?msg='.$msg);
	}else{
		if($user_pw == $currentpw){
		
			if($pw1==$pw2){
				
				mysql_query("UPDATE `users` 
				SET `password` = '$pw1' WHERE `id` = '$user_id'")
				or die($mysql_error);
				
				$msg = "Successfully changed password";
				header('Location:changepw.php?msg='.$msg);
				
			}else{
				$msg = 'New password mismatch';
				header('Location:changepw.php?msg='.$msg);
			}
		}else{
			$msg = 'Incorrect current password';
			header('Location:changepw.php?msg='.$msg);
		}
	}
}

if(isset($_POST['userAdmin'])){
	
	$currentpw = $_POST['currentPassword'];
		  $pw1 = $_POST['newPassword1'];
		  $pw2 = $_POST['newPassword2'];
	  $user_id = $_SESSION['user_id'];
	  $user_pw = $_SESSION['user_pw'];
	
	if(empty($currentpw)||empty($pw1)||empty($pw2)){
		$msg = "All fields are required";
		header('Location:userAdminChangepw.php?msg='.$msg);
	}else{
		if($user_pw == $currentpw){
		
			if($pw1==$pw2){
				
				mysql_query("UPDATE `users` 
				SET `password` = '$pw1' WHERE `id` = '$user_id'")
				or die($mysql_error);
				
				$msg = "Successfully changed password";
				header('Location:userAdminChangepw.php?msg='.$msg);
				
			}else{
				$msg = 'New password mismatch';
				header('Location:userAdminChangepw.php?msg='.$msg);
			}
		}else{
			$msg = 'Incorrect current password';
			header('Location:userAdminChangepw.php?msg='.$msg);
		}
	}
}













?>