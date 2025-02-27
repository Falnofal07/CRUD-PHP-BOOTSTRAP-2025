<?php

// Include koneksi database
include('koneksi.php');

// Get data dari form
$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Query update data
$query = "UPDATE tbl_siswa SET nisn='$nisn', nama_lengkap='$nama_lengkap', alamat='$alamat' WHERE id_siswa='$id_siswa'";

if (mysqli_query($connection, $query)) {
    // Redirect with success message
    header("Location: index.php?message=Data berhasil diperbarui");
} else {
    // Redirect with error message
    header("Location: index.php?message=Error: " . mysqli_error($connection));
}

?>
