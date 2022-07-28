<?php
    include('i-koneksi.php');

    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $nik        = $_POST['nik'];
    $tanggal    = $_POST['tanggal'];
    $waktu      = $_POST['waktu'];
    $suhu       = $_POST['suhu'];
    $tujuan     = $_POST['tujuan'];
    $catatan    = $_POST['catatan'];

    $query = "UPDATE tb_perjalanan SET nama='$nama' , nik='$nik' , tanggal='$tanggal' , waktu='$waktu' , suhu='$suhu' , tujuan='$tujuan' , catatan='$catatan' WHERE id='$id' ";

    if(mysqli_query($conn , $query)){
        header('location:i-catatan.php');
    }else{
        echo "ERROR DATA GAGAL DI UPDATE : " .mysqli_error($conn);
    }
    mysqli_close($conn);
?>