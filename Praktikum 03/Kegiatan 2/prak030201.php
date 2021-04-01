<?php
	function hitungGaji($gol, $masaKerja) {
		if($gol == "A") {
			if($masaKerja < 10) {
				$gaji = 5000000;
			} else {
				$gaji = 7000000;
			}
		}
		else if($gol == "B") {
			if($masaKerja < 10) {
				$gaji = 6000000;
			} else {
				$gaji = 8000000;
			}
		}
		return $gaji;
	}
	
	echo "Gaji Gol A dengan masa kerja dibawah 10 tahun = Rp ".hitungGaji("A", 8);
	echo "<br>";
	echo "Gaji Gol A dengan masa kerja diatas 10 tahun = Rp ".hitungGaji("A", 10);
	echo "<br>";
	echo "Gaji Gol B dengan masa kerja dibawah 10 tahun = Rp ".hitungGaji("B", 8);
	echo "<br>";
	echo "Gaji Gol B dengan masa kerja diatas 10 tahun = Rp ".hitungGaji("B", 10);
?>