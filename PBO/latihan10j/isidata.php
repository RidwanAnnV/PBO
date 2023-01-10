<?php
include('koneksi.php');

if (isset($_POST["nis"])) {

    $nis = $_REQUEST['nis'];
    $nama = $_REQUEST['nama'];
    $kelas = $_REQUEST['kelas'];

    $query = $koneksi->query("INSERT into datasiswa values('$nis','$nama','$kelas')");

    header('Location:home.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
        <h1 class="card-header">Input Data</h1>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="" placeholder="" name="nis" required>
                    <label for="floatingInput">Nis</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="" placeholder="" name="nama" required>
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="" placeholder="" name="kelas" required>
                    <label for="floatingInput">kelas</label>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>

        </form>
    </div>
    </div>
</body>

</html>