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
    <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
        <h1 class="card-header"> DAFTAR</h1>
        <div class="card-body">
        <form action="prosesregister.php" method="POST">
            <span>username: <input type="text" name="username"></span>
            <br>
            <br>
            <span>password: <input type="password" name="password"></span>
            <br>
            <br>
            <select class="form-select" aria-label="Default select example" name="role">
                <option>admin</option>
                <option>user</option>
            </select>
            <br>
            <br>
            <button class="btn btn-primary">Daftar</button>
        </form>
        </div>
        <span>ADA AKUN GA?<a href="login.php">Login</a></span>
    </div>
</body>
</html>