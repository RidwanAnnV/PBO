<?php 
    require("koneksi.php");

    $id = $_GET["id"];

    $query = $koneksi->query("delete from produk where id='$id'");

    if ($query){
        Header("Location:form.php");
    }

?>