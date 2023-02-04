<?php
    include("koneksi.php");

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $nomor_induk = $_POST['nomor_induk'];
        $kota = $_POST['kota'];
        $hobby = $_POST['hobby'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        $query = "INSERT INTO data_siswa (nama, alamat, jenis_kelamin, agama, nomor_induk, kota, hobby, tempat_lahir, tanggal_lahir) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$nomor_induk', '$kota', '$hobby', '$tempat_lahir', '$tanggal_lahir')";
        $result = mysqli_query($connect, $query);

        // apakah query simpan berhasil?
        if ($result) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            echo ("Data sukses disimpan!");
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            echo ("Data gagal disimpan!");
        }
    } else {
        die("Akses dilarang...");
    }
?>
<a href="http://localhost/01">Kembali ke halaman awal</a>