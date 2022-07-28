<?php
    $conn = mysqli_connect("localhost","root","","data_perjalanan");

    if(mysqli_connect_errno())
    {
        echo "KONEKSI DATABASE GAGAL : " . mysqli_connect_error();
    }else{
        // echo "YUDA GANTENG";
    }
?>