<?php
// Kode koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
