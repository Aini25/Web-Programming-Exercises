<?php
    session_start();
	
	$username = $_COOKIE['username'];
	$nyawa = $_SESSION['nyawa'];
	$skor = $_SESSION['skor'];
	
	$jawaban = $_POST['jawaban'];
	$hasil = $_SESSION['hasil'];
	
	
	if (isset($_POST['submit'])){
		if ($jawaban == $hasil){
			$_SESSION['skor'] = $skor + 10;
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
						<h1> Welcome to Math Game </h1>
					</div>
					<div class="content">
						<center>
							<p> Hello <?php echo $username ?>, Your Answer is Right! </p>
							<p> Lives : <?php echo $_SESSION['nyawa'] ?> | Score : <?php echo $_SESSION['skor'] ?></p>
							<p><a style="color: #ca4000;" href='tampilan.php'> Next Questions </a></p>
						</center>
					</div>
				</div>
			</body>
			</html>
			
<?php
		} else {
			$_SESSION['skor'] = $skor - 2;
			$_SESSION['nyawa'] = $nyawa - 1;
			
			if ($nyawa <= 1) {
				header('Location: gameover.php');

			} else {
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
						<h1> Welcome to Math Game </h1>
					</div>
					<div class="content">
						<center>
							<p> Hello <?php echo $username ?>, Your Answer is Not Correct! </p>
							<p> Lives : <?php echo $_SESSION['nyawa'] ?> | Score : <?php echo $_SESSION['skor'] ?></p>
							<p><a style="color: #ca4000;" href='tampilan.php'> Next Questions </a></p>
						</center>
					</div>
				</div>
			</body>
			</html>
<?php
			}
		}
	}
?>