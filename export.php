<?php
include('koneksi.php');

// Fetch data from the database
$query = mysqli_query($connection, "SELECT * FROM tbl_siswa");

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data_siswa.csv"');

// Open output stream
$output = fopen('php://output', 'w');

// Write column headers
fputcsv($output, ['NO.', 'NISN', 'NAMA LENGKAP', 'ALAMAT']);

// Write data rows
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    fputcsv($output, [$no++, $row['nisn'], $row['nama_lengkap'], $row['alamat']]);
}

// Close output stream
fclose($output);
exit();
?>
