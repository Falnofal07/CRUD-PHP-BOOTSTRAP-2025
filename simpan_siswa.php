<?php

// Include koneksi database
include('koneksi.php');

// Get data dari form
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Query insert data
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";

if (mysqli_query($connection, $query)) {
    // Redirect with success message
    header("Location: index.php?message=Data berhasil ditambahkan");
} else {
    // Redirect with error message
    header("Location: index.php?message=Error: " . mysqli_error($connection));
}

?>
