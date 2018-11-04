<?php
session_start();	
include 'dbh.php';

$uid = $_POST['pid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user1 WHERE pid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result))
{
	echo "Your Username or password is incorrect!";
}
else{
	header("Location: upload.html");
}

