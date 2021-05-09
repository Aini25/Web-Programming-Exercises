<?php
	session_start();
	
	$_SESSION['angka1'] = rand(0,20);
	$_SESSION['angka2'] = rand(0,20);
	
	$angka1 = $_SESSION['angka1'];
	$angka2 = $_SESSION['angka2'];
	
	$hasil = $angka1 + $angka2;
	$_SESSION['hasil'] = $hasil;
	
	$nyawa = $_SESSION['nyawa'];
	$skor = $_SESSION['skor'];
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
			
			input[type=text] {
					border: 4px solid #8842d5;
					border-radius: 5px;
					width: 60%;
					padding: 10px 5px;
			}
			
			input[type=submit] {
				  background-color: #ca4000;
				  border: none;
				  color: white;
				  text-transform: uppercase;
				  font-weight: bold;
				  padding: 12px 28px;
				  cursor: pointer;
			}
			
			</style>
		</head>
		<body>
			<form method="post" action="jawab.php">
			<div class="main">
				<div class="header">
					<h1> Welcome to Math Game </h1>
				</div>
				<div class="content">
					<center>
						<p> Hello <?php echo $_COOKIE['username'] ?>, Do Your Best! </p>
						<p> Lives : <?php echo $nyawa ?> | Score : <?php echo $skor ?></p>
						<p> Question : <?php echo $angka1 ?> + <?php echo $angka2 ?>? </p>
						<input type="text" name="jawaban" placeholder="Your Answer">
						<p><input type="submit" name="submit" value="Submit"></p>
					</center>
				</div>
			</div>
			</form>
		</body>
	</html>
