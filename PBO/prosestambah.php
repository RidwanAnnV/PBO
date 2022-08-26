<?php
require 'koneksi.php';
$id = $_POST['id'];
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
$db = new database();

$query = $db->tambahData('siswa',[$nama,$kelas]);
 if($query){
    header("Location:index.php");
 }