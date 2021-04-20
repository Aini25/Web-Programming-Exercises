<?php
	$nama = $_GET['n'];
	$diameter = $_GET['d'];
	$tinggi = $_GET['t'];
	
	$jari2 = $diameter/2;
	$phi = 3.14;
	$luas = 2 * $phi * $jari2 * ($jari2 + $tinggi);
	
	echo "<h3>Luas tabung A dengan diameter $diameter dan tinggi $tinggi adalah $luas satuan luas.</h3>";
?>