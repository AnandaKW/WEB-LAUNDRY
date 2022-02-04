<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <title></title>
    </head>
<body>
<?php
include '../login/header.php';
include '../connect.php';
$qry_laundry=mysqli_query($connect,"select * from member");
$id = $_POST['id'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "UPDATE paket SET jenis = '$jenis', harga = '$harga' WHERE id = '$id'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($result)
{
    echo "<h1>Berhasil update data</h1> <br>";
}
else
{
    echo "<h1>Gagal update data</h1><br>";
}
echo "<a href='read.php'>Lihat Data</a>";
?>
</body>
</html>