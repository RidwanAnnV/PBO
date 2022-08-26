<?php
$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=tambahan",'root','');
$query = $db->query("SELECT * from siswa where id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosesedit.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1" <?= $data['kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
                <option value="2" <?= $data['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
                <option value="3" <?= $data['kelas'] == '3' ? 'selected' : '' ?>>10 RPL</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>