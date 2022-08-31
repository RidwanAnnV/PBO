<?php
    session_start();

    if(isset($_REQUEST['submit'])){
       $_SESSION["username"] = $_REQUEST['username'];
       $_SESSION["ID"] = $_REQUEST['ID'];
    
    Header("Location:coba_tampil.php");
    }
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
    <h1>SESSION</h1>
    <form action="">
        <span>USERNAME : <input type="text" name="username"></span>
        <br>
        <span>ID : <input type="text" name="ID"></span>
        <br>
        <button name="submit" >Save</button>
    </form>
</body>
</html>