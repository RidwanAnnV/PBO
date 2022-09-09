<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="container text-center">
    <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 20rem;">
        <h1 class="card-header">Asup Heula</h1>
        <div class="card-body">
        <form action="proseslogin.php" method="POST">
            <span>username: <input type="text" name="username"></span>
            <br>
            <br>
            <span>password: <input type="password" name="password"></span>
            <br>
            <br>
            <button class="btn btn-primary">Login</button>
        </form>
        </div>
        <span><a href="register.php">Daftar</a>?</span>
    </div>
</body>
</html>