<?php
    include('koneksi.php');

    $query = $koneksi->query("select * from produk;")->fetchAll();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentv2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h1>Table Database</h1>
    <h3 class="position-absolute top-0 end-0 translate-middle-x">YOKOSO <?php echo $_SESSION["username"] ?></h3>
    <div class="container">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Price</th>
        </thead>
        <tbody class="table-group-divider">
            <?php
                foreach ($query as $querys){
                    echo "<tr>";
                    echo "<td>";
                        echo $querys["id"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["nama"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["stok"];
                    echo "</td>";
                    echo "<td>";
                        echo $querys["price"];
                    echo "</td>";
                    echo "</tr>";
                };
            ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="login.php">Log Out</a>
</body>
</html>