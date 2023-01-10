<?php 
    require("koneksi.php");

    $nis = $_GET["nis"];

    $query = $koneksi->query("DELETE from dataSiswa where nis='$nis'");

    if ($query){
        Header("Location:home.php");
    }

?>