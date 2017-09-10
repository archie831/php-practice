<?php

$mysql_error = 'Error: Could not connect to MySQL';
$mysql_connected = 'Connected';
$database_error = 'Error: Cannot find database';

if(@mysql_connect('localhost','root','')){
		
	if(@mysql_select_db('user_records')){
		
		echo $mysql_connected;
	}else{
		die($database_error);
	}
	
}else{
	die($mysql_error);
}
?>