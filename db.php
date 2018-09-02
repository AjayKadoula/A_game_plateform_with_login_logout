<?php

function connect_db(){
    $connectionStatus=mysqli_connect("localhost","root","","game");
	if(!$connectionStatus){
		echo "Error to connecting database";
		exit;
	}
	return $connectionStatus;
}
function find_user($connectionStatus,$email,$password)
{
	$query= "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_num_rows($result)== 1){
		return mysqli_fetch_assoc($result);
	}
	return false;
}

function signup_user($connectionStatus,$username,$email, $password)
{
	$query="INSERT INTO `users` (`id`, `username`, `email`, `password`,`status`, `create_time`) VALUES (NULL, '$username', '$email', '$password', 'online', CURRENT_TIMESTAMP)";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_affected_rows($connectionStatus)== 1){
		return true;
	}
	return false;
}


function is_member($connectionStatus,$email)
{
	$query="SELECT * FROM `users` WHERE `email` LIKE '$email'";
	$result=mysqli_query($connectionStatus,$query);
	if(mysqli_num_rows($result)== 1){
		return true;
	}
	return false;
}
function Status($connectionStatus,$email)
{
	$query="UPDATE users SET `Status` = 'online' WHERE `email` like '$email'";
	$result=mysqli_query($connectionStatus,$query);
	if($result){
		return true;
	}
	return false;
}
function StatusInactive($connectionStatus,$email)
{
	$query="UPDATE users SET `Status` = 'offline' WHERE `email` like '$email'";
	$result=mysqli_query($connectionStatus,$query);
	if($result){
		return true;
	}
	return false;
}

?>