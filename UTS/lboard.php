<?php
    session_start();
	include("config.php");
	
	$nomer = 1;
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
				<h1> Game LeaderBoard </h1>
			</div>
			<div class="content">
				<center>
					<table style="background-color: #f6fea8;" border="2" cellpadding="10" align="center">
						<thead>
							<tr>
								<th> No </th>
								<th> Username </th>
								<th> Score </th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql = "SELECT * FROM leaderboard ORDER BY skor DESC LIMIT 10";
								$query = mysqli_query($db, $sql);

								while($data = mysqli_fetch_array($query)){
									echo "<tr>";
									
									echo "<td align='center'>".$nomer."</td>";
									echo "<td align='center'>".$data['username']."</td>";
									echo "<td align='center'>".$data['skor']."</td>";

									echo "</tr>";
									
									$nomer++;
								}
								?>

						</tbody>
					</table>

					<p><a style="color: #ca4000;" href='tampilan.php'> PLAY AGAIN </a></p>
					<p><a style="color: #ca4000;" href='logout.php'> QUIT </a></p>
				</center>
			</div>
		</div>
	</body>
	</html>
	