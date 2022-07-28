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

$query = "INSERT INTO tb_perjalanan(nama , nik , tanggal , waktu , suhu , tujuan , catatan) VALUES('$nama' , '$nik' , '$tanggal' , '$waktu' , '$suhu'  , '$tujuan' , '$catatan')";

if(mysqli_query($conn , $query)){
    header('location:i-catatan.php');
}
else{
    echo "ERROR DATA GAGAL DI TAMBAHKAN : " .mysqli_error($conn);
}
mysqli_close($conn);
?>