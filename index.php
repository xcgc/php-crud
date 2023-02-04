<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- Javascript Bootstrap Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>


    <title>Biodata Siswa</title>
</head>

<body>
    <form method="POST" action="aksi.php">
        <div class="container p-5 my-5 border">
            <div>
                <h1 class="text-center">Biodata Siswa</h1>
            </div>
            <div class="form-group">
                <label class="mb-2" for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="nomor_induk">Nomor Induk</label>
                <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" placeholder="Masukkan nomor induk">
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="kota">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukkan kota">
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="hobby">Hobby</label>
                <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Masukkan hobby">
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir">
            </div>
            <div class="form-group">
                <label class="mb-2 mt-3" for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tempat lahir">
            </div>
            <script type="text/javascript">
                $(function() {
                    $(".datepicker").datepicker({
                        format: 'yyyy-dd-mm',
                        autoclose: true,
                        todayHighlight: true,
                    });
                });
            </script>
            <div class="container d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary mx-auto" name="submit">Submit</button>
                <a href="view.php" class="btn btn-info mx-auto">View Data</a>
            </div>
        </div>
    </form>
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