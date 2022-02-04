<?php

include '../connect.php';
include '../login/header.php';

$nama_member = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp_member = $_POST['tlp'];
$jeniskelamin = $_POST['jenis_kelamin'];


$query = "Insert Into member (nama, alamat, tlp, jenis_kelamin) Values ('$nama_member', '$alamat', '$tlp_member', '$jeniskelamin')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($result){
    echo"<h1>Berhasil Menambahkan Data</h1>";
}else{
    echo"<h1>Gagal Menambahkan Data</h1>";
}

echo "<a href='read.php'>Lihat Data</a>";
?>