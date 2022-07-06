<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "cattobuyz_monolitic";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal terhubung ke database! ". mysqli_connect_error());
}

?>