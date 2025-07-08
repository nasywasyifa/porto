<?php
$host_koneksi     = "z4ks04s88og800wkw844gkw8";
$username_koneksi = "syifa0506";
$password_koneksi = "syifa0506";
$database_koneksi = "default";
$port_koneksi     = 3306;

$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi, $database_koneksi, $port_koneksi);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
