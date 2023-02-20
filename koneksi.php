<?php 
    $localhost = 'localhost';
    $username = 'odin';
    $password = 'sajudin';
    $database = 'sajudinukk';
    $koneksi = mysqli_connect($localhost,$username,$password,$database);

    // Check connection
    // if (!$koneksi){
    //     echo "Koneksi database gagal : " . mysqli_connect_error();
    // }

?>