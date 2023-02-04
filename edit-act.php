<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nomor_induk = $_POST['nomor_induk'];
    $kota = $_POST['kota'];
    $hobby = $_POST['hobby'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    // buat query update
    $sql = "UPDATE data_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', nomor_induk='$nomor_induk' kota='$kota', hobby='$hobby', tempat_lahir='$tempat_lahir', tamggal_lahir='$tanggal_lahir' WHERE nomor_induk=$nomor_induk";
    $query = mysqli_query($connect, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
