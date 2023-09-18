<?php
// Kode koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "nilai");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
