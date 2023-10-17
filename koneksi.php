<?php
    $host = "prognet.localnet";
    $username = "2205551073";
    $password = "2205551073";
    $database = "db_2205551073";
    $koneksi = new mysqli($host, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }
?>