<?php
	function hitungDenda($tglHarusKembali, $tglKembali) {
		
		$x1 = explode("-", $tglHarusKembali);
		$tgl1 = $x1[2];
		$bln1 = $x1[1];
		$thn1 = $x1[0];
		
		$x2 = explode("-", $tglKembali);
		$tgl2 = $x2[2];
		$bln2 = $x2[1];
		$thn2 = $x2[0];
		
		$jadi1 = GregorianToJD($bln1, $tgl1, $thn1);
		$jadi2 = GregorianToJD($bln2, $tgl2, $thn2);
		
		$selisih = $jadi2 - $jadi1;
		
		$denda = 3000 * $selisih;
		return $denda;
	}
	
	echo "Besar Denda = Rp ".hitungDenda("2021-05-20", "2021-05-25");
?>
	