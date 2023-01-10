<?php

    include("koneksi.php");

    $nis = $_GET["nis"];

    $nama = $_REQUEST["nama"];
    $kelas = $_REQUEST["kelas"];
    

    $query = $koneksi->query("UPDATE datasiswa SET `nis`='$nis',`nama`='$nama',kelas = '$kelas' WHERE nis='$nis'");
    
    if ($query){
        Header("Location:home.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
<h1 class="card-header">Edit Catatan</h1>
    <div class="card-body">
    <form action="" method="POST">
        <div class="form-floating mb-3">
                <input type="text" class="form-control" value="" id="" placeholder="" name="nama" required>
                 <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating mb-3">
                <input type="text" class="form-control" value="" id="" placeholder="" name="kelas" required>
                 <label for="floatingInput">Jam</label>
            </div>
        <button class="btn btn-primary">Submit</button>    
    </form>
    </div>
</div>
</body>
</html>