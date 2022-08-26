<?php
require "koneksi.php";
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $id = $_POST['id'];

 $database = new database();
 $query = $database->update("siswa",['nama'=>$nama, 'kelas' => $kelas], ['id' => $id]);

 if($query){
    header("Location:index.php");
 }