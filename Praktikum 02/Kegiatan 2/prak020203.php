<?php
	$baris = 4;
	$kolom = 5;
	$angka = 1;
	echo "<table border=’1’>";
	for($i = 0; $i < $baris; $i++){
		echo "<tr>";
		for ($j = 0; $j < $kolom; $j++){
			if($angka % 2 == 0) {
				$warna = "bgcolor='red' style='color:white;'";
			} else {
				$warna = "bgcolor='white' style='color:red;'";
			}
			echo "<td $warna> $angka </td>";
			$angka++;
		}
		echo "</tr>";
	}
	echo "</table>";
?>