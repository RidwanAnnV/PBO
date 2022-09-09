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
<div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
    <h1 class="card-header">Tambah Product</h1>
    <div class="card-body">
    <form action="proses_tambah.php" method="POST">
        <label for="form-name" class="form-label">Name</label>
        <input class="form-control" name="nama" type="name" id="form-name">
        <br>
        <br>
        <span>Stok</span>
        <input class="form-control" name="stok" type="name">
        <br>
        <br>
        <span>Price</span>
        <input class="form-control" name="price" type="text">
        <br>
        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</body>
</html>