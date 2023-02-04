<!-- View mysql data and show using bootstrap table -->
<?php include("koneksi.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View Data</title>
</head>

<body>
    <div class="container p-5 my-5">
        <h1 class="text-center">List Data Siswa</h1>
    </div>

    <table class="table container p-5 my-5 border">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Induk</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Hobby</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Agama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query($connect, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['nomor_induk'] . "</td>";
                echo "<td>" . $siswa['tanggal_lahir'] . "</td>";
                echo "<td>" . $siswa['tempat_lahir'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['hobby'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['kota'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";


                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p class="text-center">Total Siswa: <?php echo mysqli_num_rows($query) ?> anak</p>
    <div class="container d-flex justify-content-center">
        <a href="http://localhost/01" class="btn btn-primary mx-auto">Masukkan Data</a>
        <a href="#" class="btn btn-info mx-auto">Edit Data</a>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>