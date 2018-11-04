<?php
	
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['pid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user1 (first,last,pid,pwd)
VALUES ('$first','$last','$uid','$pwd')";
$result = mysqli_query($conn,$sql);

header("Location: index.html");

?>