<?php

	//baca input data
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgllhr = $_POST['tgllhr'];
	$tmptlhr = $_POST['tmptlhr'];
	
	//simpan data
	$namaFile = "datamhs.dat";
	$myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
	$data = $nim."|".$nama."|".$tgllhr."|".$tmptlhr;
	$data = "\r\n".$data;
	fwrite($myfile, $data);
	fclose($myfile);
	
	echo "Data Telah Tersimpan";
?>
	