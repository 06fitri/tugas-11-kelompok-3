<?php  

$koneksi= new mysqli("localhost", "root", "", "karyawan"); /* baris ini untuk menghubungkan kedatabase */

$cek=mysqli_query($koneksi, "SELECT * FROM datakaryawan");/* baris ini menampilkan semua data dari tabel datamahasiswa */

?>
<!DOCTYPE html>
<html>
<head>
	<title>data karyawan</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="car" id="car" size="50px" autofocus autocomplete="on" placeholder="ketik NPM yang ingin dicari">
		<button type="submit"  name="cari"> cari</button>
		<b><button><a href="inputdata.php" style="text-decoration: none;">Tambah data</a></button></b>
				<b><button><a href="keluar.php" style="text-decoration: none;">logout</a></button></b>
				<b><button><a href="login.php" style="text-decoration: none;">login</a></button></b>


	</form>
	<br>
<table border="1px" cellpadding="15px" cellspacing="0" width="100%">	
<tr>
	<th>No</th>
	<th>Aksi</th>
	<th>Nomor</th>
	<th>Nama</th>
	<th>tanggal</th>
	<th>Alamat</th>

</tr>
<?php $i=1; ?>
	<?php  while ($row=mysqli_fetch_assoc($cek) )/* baris ini mengambil  semua data dari variabel $cek menjadi menjadi array asosiatip atau keynya berdasarkan name atau nama, dan melakukan perulangan */ :{
		} ?>
<tr>
	<td> <?php echo $i; ?></td>
	<td><button><a href="hapus.php?npm=<?=$row["npm"]; ?>" onclick="return confirm('yakin');" style="text-decoration: none;">hapus data</a></button>
	<button><a href="ubah.php?npm=<?= $row["npm"]; ?>" style="text-decoration: none;"> ubah data</a></button>
</td>
	<td><?php echo$row["nomor"]; ?></td>
	<td><?php echo$row["nama"]; ?></td>
	<td><?php echo$row["tanggal"]; ?></td>
	<td><?php echo$row["alamat"]; ?></td>
</tr>
<?php $i++; ?>
<?php  endwhile;  /* baris ini berfungsi mengakhiri perulangan while */?>
</table>
</body>
 
<footer >
<div style="text-align: right;position: fixed;z-index:100;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height:7;display:block !important; color: green;"><b>Kelompok III</b></div>
</footer>
</html>



