<?php
	if (isset($_COOKIE['email'])){
		$username = $_COOKIE['username'];
		
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
						<h1> MATH GAME LOGIN </h1>
					</div>
					<div class="content">
						<center>
							<p> Hello <?php echo $username ?>, Welcome Back to My Game ^^ </p
							<p><a style="color: #ca4000;" href='tampilan.php'> Start Game! </a></p>
							<p> Not You? <a style="color: #ca4000;" href='logout.php'> Click Here! </a></p>
						</center>
					</div>
				</div>
			</body>
		</html>

<?php 
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
				<form method="post" action="login.php">
				<div class="main">
					<div class="header">
						<h1> MATH GAME LOGIN </h1>
					</div>
					<div class="content">
						<center>
							<p><input type="text" name="username" placeholder="Your Name"></p>
							<p><input type="text" name="email" placeholder="Your Email"></p>
							<input type="submit" name="submit" value="Login">
						</center>
					</div>
				</div>
				</form>
			</body>
		</html>
		
<?php
	}
?>