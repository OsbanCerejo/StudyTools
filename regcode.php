<?php

$regcode = $_GET['regcode'];
$code = 1234;

if($regcode != $code)
{
	echo "Sorry, you are not authenticated to register yourself. Please ask the admin of this website to provide you with a valid registeration code";
	//header("Location : login.html");
}
else{
	//echo "Match";
	header("Location: register.html");
}

?>