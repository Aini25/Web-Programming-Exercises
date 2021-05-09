<?php

$server = "sql206.epizy.com";
$user = "epiz_28102309";
$password = "Dv9xQdw7poUPyC";
$nama_database = "epiz_28102309_math_game";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>