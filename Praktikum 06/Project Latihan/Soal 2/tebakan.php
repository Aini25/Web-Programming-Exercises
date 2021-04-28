<?php
    session_start();
	
	$random = $_SESSION['angka'];
	
	if (isset($_POST['submit'])){
        $tebakan = (int)$_POST['tebakan'];
        if ($tebakan < $random){
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
							<p>Waah... masih salah yaa, bilangan tebakan <?php echo $_COOKIE['user'] ?> terlalu kecil!</p>
							<input type="text" name="tebakan" placeholder="Tebakan Kamu">
							<p><input type="submit" name="submit" value="Submit"></p>
						</center>
					</div>
				</div>
				</form>
			</body>
			</html>

<?php
		} else if ($tebakan > $random){
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
							<p>Waah... masih salah yaa, bilangan tebakan <?php echo $_COOKIE['user'] ?> terlalu besar!</p>
							<input type="text" name="tebakan" placeholder="Tebakan Kamu">
							<p><input type="submit" name="submit" value="Submit"></p>
						</center>
					</div>
				</div>
				</form>
			</body>
			</html>
		
<?php
		} else {
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
				<div class="main">
					<div class="header">
						<h1> Welcome to Tebak Angka </h1>
					</div>
					<div class="content">
						<center>
							<p> Hallo <?php echo $_COOKIE['user'] ?>! </p>
							<p> Bilangan tebakan kamu sudah benar! Saya memilih bilangan <?php echo $random ?>. </p>
							<p><a href='soal.php'> Ulangi Lagi </a></p>
							<p><a href='logout.php'> Logout </a></p>
						</center>
					</div>
				</div>
			</body>
			</html>

<?php
		}
	}
?>
					
			