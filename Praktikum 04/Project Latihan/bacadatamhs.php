<html>
	<head><title> Data Mahasiswa </title></head>
	<body>
		<?php echo "<h1 align=center>Data Mahasiswa</h1>"; ?>
		<br>
		<table border="2" cellpadding="6" align="center">
			<thead>
				<tr>
					<th> No </th>
					<th> NIM </th>
					<th> Nama Mahasiswa </th>
					<th> Tanggal Lahir </th>
					<th> Tempat Lahir </th>
					<th> Usia (Thn) </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$namaFile = "datamhs.dat";
					$file = fopen($namaFile, "r") or die("Tidak bisa buka file!");
					
					function hitungUmur($tglLhr){
						$tgl = new DateTime($tglLhr);
						$today = new DateTime("today");
						
						$usia = $today->diff($tgl)->y;
						return $usia;
					}
						
					$count = 1;
					while (!feof($file)) {
						echo "<tr>";
						$line = fgets($file);
						$kata = explode("|", $line);
						$usiafix = hitungUmur($kata[2]);
						array_unshift($kata, $count);
						array_push($kata, $usiafix);
						
						foreach ($kata as $datamhs) {
							echo "<td> $datamhs </td>";
						}
						
						echo "</tr>";
						$count++;
					}
					
					fclose($file);
					$jml = $count - 1;
				?>
			</tbody>
		</table>
		<?php echo "<h4 align=center>Jumlah Data : $jml</h4>"; ?>
	</body>
</html>