<?php
	session_start();

	setcookie('username', null, -1, "/");
	setcookie('email', null, -1, "/");
	
	session_destroy();
	
	header("Location: index.php");
?>