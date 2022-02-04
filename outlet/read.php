<!DOCTYPE html>
<html>
	<head>
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
	</head>
	<body>
    <?php
	include '../login/header.php';
	?>
		 <title></title>
	</head>
	<body>
	<div class="container mt-5 pt-5">
	<td><a href="form-create.php" class="btn btn-success">Tambah outlet</a>
<br>
		 <h3>Data Outlet</h3>
		 <table class="table table-hover table-striped">
		 <head>
		 <tr>
		 <th>NO</th><th>NAMA OUTLET</th><th>ALAMAT</th><th>OWNER</th><th>AKSI</th>
		 </tr>
		 </head>
		 <body>
		 <?php
		 
		 include '../connect.php';
		$qry_laundry=mysqli_query($connect,"select * from outlet");
		 $no=0;
		 while($data_outlet=mysqli_fetch_array($qry_laundry)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_outlet['nama_outlet']?></td>
		<td><?=$data_outlet['alamat']?></td>
        <td><?=$data_outlet['owner']?></td>
		
		
		<td><a href="form-update.php?id=<?=$data_outlet['id']?>" class="btn btn-success">Ubah</a> | 
		<a href="delete.php?id=<?=$data_outlet['id']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
	</body>
</html>