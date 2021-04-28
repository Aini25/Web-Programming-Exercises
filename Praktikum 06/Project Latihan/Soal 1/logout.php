<?php
	session_start();

	setcookie('namauser', '', time()-3600);
	header("Location: form.html");
?>