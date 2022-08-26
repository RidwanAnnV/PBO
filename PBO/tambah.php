<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosestambah.php" method="post">
    <div>
            <label>ID</label>
            <input type="text" name="id">
        </div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1">12 RPL</option>
                <option value="2">11 RPL</option>
                <option value="3">10 RPL</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>