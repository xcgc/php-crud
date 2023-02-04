<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['nomor_induk']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['nomor_induk'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE nomor_induk=$nomor_induk";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

