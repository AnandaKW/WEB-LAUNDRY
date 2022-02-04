<?php
if($_GET['id']){
include "../connect.php";
$qry_delete=mysqli_query($connect,"delete from member where id='".$_GET['id']."'");
if($qry_delete){
echo "<script>alert('Sukses hapus member');location.href='read.php';</script>";
} else {
echo "<script>alert('Gagal hapus member');location.href='read.php';</script>";
}
}
?>