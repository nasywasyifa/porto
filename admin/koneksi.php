<?php
$host_koneksi = "localhost";
$username_koneksi = "syifa0506";
$password_koneksi = "z4ks04s88og800wkw844gkw8";
$database_koneksi = "default";

// mysql://mysql:syifa0506@z4ks04s88og800wkw844gkw8:3306/default

$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi);

if (!$koneksi) {
    echo "Koneksi Gagal";
}
