<?php

$host       = "127.0.0.1";
$usarname   = "root";
$password   = "1";
$database   = "kampus";
$port = 8111;

$koneksi = new mysqli($host, $usarname, $password, $database, $port);

if (!$koneksi) {
    echo "Database tidak terhubung";
} else {
    echo "Database terhubung";
}
?>