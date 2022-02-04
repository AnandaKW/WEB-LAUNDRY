<?php

include '../connect.php';
include '../login/header.php';

$nama_outlet = $_POST['nama_outlet'];
$alamat = $_POST['alamat'];
$owner = $_POST['owner'];


$query = "Insert Into outlet (nama_outlet, alamat, owner) Values ('$nama_outlet', '$alamat', '$owner')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo"<h1>Berhasil Menambahkan Data</h1>";
}else{
    echo"<h1>Gagal Menambahkan Data</h1>";
}

echo "<a href='read.php'>Lihat Data</a>";
?>