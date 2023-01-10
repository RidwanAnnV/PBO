<?php 

include('koneksi.php');
$query = $koneksi->query("select * from datasiswa;")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <h1>HOME</h1>
        <div class="container">
        <table class="table">
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>kelas</th>
        </thead>
        <tbody class="table-group-divider">
        <?php
                foreach ($query as $querys){
                    echo "<tr>";
                    echo "<td>";
                        echo $querys["nis"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["nama"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["kelas"];
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $querys["nis"] . "' class='btn btn-primary'>Edit</a> | ";
        echo "<a href='hapus.php?id=" . $querys["nis"] . "' class='btn btn-danger'>Delete</a>";
                };
            ?>
        </tbody>
    </table>
        </div>
        <a class="btn btn-primary" href="isidata.php">Isi Data</a>
</body>
</html>