<?php
	session_start();
	
	if(!isset($_COOKIE['user'])) {
		setcookie('user', $_POST['username'], time()+2*3600, "/");
			
		header("Location: soal.php");
	}

	$_SESSION['angka'] = rand(0,100);
?>

<html>
	<head>
		<title> Game Tebak Angka </title>
		<style>
		.main{
		  width: 400px;
		  margin: 90px auto;
		  background-color: black;
		  box-shadow: 0 0 9px black;
		  line-height: 200%;
		}
		
		.content{
		  background-color: #eaeaea;
		  margin-top: -21px;
		  padding: 15px;
		}

		.header{
		  background-color: violet;
		  margin: 15px auto;
		  text-align: center;
		  padding: 15px;
		}
		
		</style>
	</head>
	<body>
		<form method="post" action="tebakan.php">
		<div class="main">
			<div class="header">
				<h1> Welcome to Tebak Angka </h1>
			</div>
			<div class="content">
				<center>
					<p> Hallo <?php echo $_COOKIE['user'] ?>, nama saya Mr. PHP! </p>
					<p> Saya telah memilih secara random sebuah bilangan bulat. Silahkan menebak ya! </p>
					<input type="text" name="tebakan" placeholder="Tebakan Kamu">
					<p><input type="submit" name="submit" value="Submit"></p>
				</center>
			</div>
		</div>
		</form>
	</body>
</html>