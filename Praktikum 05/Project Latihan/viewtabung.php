<html>
	<head><title> Data Tabung </title></head>
	<body>
		<?php echo "<h1 align=center>Data Tabung</h1>"; ?>
		<br>
		<table border="2" cellpadding="6" align="center">
			<thead>
				<tr>
					<th> Nama Tabung </th>
					<th> Diameter </th>
					<th> Tinggi </th>
					<th> Luas </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$namaFile = "datatabung.dat";
					$file = fopen($namaFile, "r") or die("Tidak bisa buka file!");
						
					while (!feof($file)) {
						echo "<tr>";
						$line = fgets($file);
						$isi = explode(",", $line);
						
						foreach ($isi as $datatabung) {
							echo "<td> $datatabung </td>";
						}
						
						echo "<td><a href='hitungluas.php?n=$isi[0]&d=$isi[1]&t=$isi[2]'> View </a></td>";
						echo "</tr>";
					}
					
					fclose($file);
				?>
			</tbody>
		</table>
	</body>
</html>