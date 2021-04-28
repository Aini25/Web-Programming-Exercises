<?php
	session_start();

	setcookie('user', '', time()-2*3600, "/");
	header("Location: login.html");
?>