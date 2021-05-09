<?php
	session_start();
	
	if (isset($_POST['submit'])){
		setcookie('username', $_POST['username'], time()+7*24*3600, "/");
		setcookie('email', $_POST['email'], time()+7*24*3600, "/");
		
		$_SESSION['nyawa'] = 5;
		$_SESSION['skor'] = 0;
		
		header("Location:tampilan.php");
	}
?>
