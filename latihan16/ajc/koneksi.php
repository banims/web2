<?php
    $host     = "localhost:3308";
    $username = "root";
    $password = "";
    $database = "ajc";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
