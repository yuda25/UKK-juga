<?php
    $id = $_GET['id'];
    include('i-koneksi.php');

    $query = "DELETE FROM tb_perjalanan WHERE id='$id'";

    if (mysqli_query($conn , $query)) 
    {
        header('location:i-catatan.php');
    }else{
        echo "ERROR DATA GAGAL DI HAPUS : " .mysqli_error($conn);
    }
    mysqli_close($conn);
?>