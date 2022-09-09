<?php

    include("koneksi.php");

    $id = $_GET["id"];

    $name = $_REQUEST["nama"];
    $stok = $_REQUEST["stok"];
    $price = $_REQUEST["price"];

    $query = $koneksi->query("UPDATE `produk` SET `nama`='$name',`stok`='$stok',`price`='$price' WHERE id='$id'");
    
    if ($query){
        Header("Location:form.php");
    }

?>