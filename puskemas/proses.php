<?php
    include("koneksi.php");


    $nama = $_REQUEST["nama"];
    $password = $_REQUEST["password"];



    $query = $koneksi->query("SELECT * from pengguna where nama='$nama' AND password='$password'")->fetchAll();
    

    if (count($query) > 0){
        $_SESSION["nama"] = $nama;
        $_SESSION["role"] = $query[0]["role"];
        if ($_SESSION['role'] == "Admin"){
            header("Location:admin.php");
        }
        else if($_SESSION['role'] == "User" ) {
            header("Location:user.php");
            
        }
    }
    else{

        header("Location:login.php");
    }
?>