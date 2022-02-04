<?php

include '../connect.php';
include '../login/header.php';

$jenis = $_POST['jenis'];
$harga = $_POST['harga'];


$query = "Insert Into paket (jenis, harga) Values ('$jenis', '$harga')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo"Berhasil Menambahkan Data";
}else{
    echo"Gagal Menambahkan Data";
}

echo "<a href='read.php'>Lihat Data</a>";
?>