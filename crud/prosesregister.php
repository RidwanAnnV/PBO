<?php
    include('koneksi.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];
    
    $query = $koneksi->query("insert into user values(null, '$username','$password','$role')");

    header('Location: login.php');
    // v2
?>