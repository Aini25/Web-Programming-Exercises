<?php
    session_start();
	include("config.php");
	
	$username = $_COOKIE['username'];
	$skor = $_SESSION['skor'];
	
	if($_SESSION['nyawa'] == 0) {
		$_SESSION['nyawa'] = 5;
		$_SESSION['skor'] = 0;
		
		$sql = "UPDATE leaderboard SET skor='$skor' WHERE username='$username'";
		$query = mysqli_query($db, $sql);
	}
	
	$sql = "INSERT INTO leaderboard (username, skor) VALUE ('$username', '$skor')";
	$query = mysqli_query($db, $sql);
	
?> 

	<html>
	<head>
		<title> My Game For You </title>
		<style>
		body {
		  background-color: #f6fea8;
		}
		
		.main{
		  width: 400px;
		  margin: 90px auto;
		  background-color: black;
		  line-height: 200%;
		  box-shadow: 30px -20px #b87bcb;
		}
		
		.content{
		  background-color: #fefefe;
		  margin-top: -21px;
		  padding: 15px;
		}

		.header{
		  background-color: #a1fcbe;
		  margin: 15px auto;
		  text-align: center;
		  padding: 15px;
		}
		
		</style>
	</head>
	<body>
		<div class="main">
			<div class="header">
				<h1> Game Over </h1>
			</div>
			<div class="content">
				<center>
					<p> Hello <?php echo $username ?>, Unfortunately the game is over. Hopefully next time it can be better! </p>
					<p> Your Score : <?php echo $skor ?></p>
					<p><a style="color: #ca4000;" href='tampilan.php'> PLAY AGAIN </a></p>
					<p><a style="color: #ca4000;" href='lboard.php'> LEADERBOARD </a></p>
				</center>
			</div>
		</div>
	</body>
	</html>