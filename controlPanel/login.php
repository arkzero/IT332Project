<?php
$error = TRUE;

if(($_POST["username"] == "admin") && ($_POST["password"] == "thisisareallylongpassword1234"))
	$error = FALSE;

if($error) {
	header('Location: login.html');
} else {
	header('Location: app.html');
}

?>