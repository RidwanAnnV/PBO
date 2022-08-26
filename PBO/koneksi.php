<?php 
class koneksi{
    function koneksi(){
    return $koneksi1 = new pdo("mysql:host=localhost;dbname=tambahan",'root','');
}
}