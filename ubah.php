<?php  


if (isset($_GET['nomor'])) {
$no=$_GET['nomor'];
$koneksi= new mysqli("localhost", "root", "", "karyawan");/* baris ini untuk menghubungkan kedatabase */

$cek=mysqli_query( $koneksi,"SELECT * FROM datakaryawan WHERE nomor=$no");/* baris ini mengambil data dari tabel kendaraan berdasarkan id yang diinput*/
}


else{

		header("Location: daftar karyawan.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	<?php ($row=mysqli_fetch_assoc($cek));{
		 ?>
<tr>
	<td>NOMOR</td>
	<td><input type="text" name="a" id="a" value="<?php echo$row["nomor"]; ?>" required="" minlength="1"></td>
</tr>
<tr>
	<td>NAMA</td>
	<td><input type="text" name="b" id="b" value="<?php echo$row["nama"]; ?>" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>TANGGAL</td>
	<td><input type="date" name="c" id="c" value="<?php echo$row["tanggal"]; ?>" required="" minlength="1"></td>
	</tr>
	<tr>
	<td>ALAMAT</td>
	<td><input type="text" name="d" id="d" value="<?php echo$row["alamat"]; ?>" required="" minlength="1"></td>
	</tr>
<tr> 
<td></td>

	<td>
<button type="submit" name="kirim">Kirim</button>
<b><button><a href="daftar mahasiswa.php" style="text-decoration: none;">kembali kedaftar</a></button></b>

</td>
</tr>
<?php } ?>
</table>
</center>
</body>
 
<footer >
<div style="text-align: right;position: fixed;z-index:100;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height:7;display:block !important; color: green;"><b>Kelompok III</b></div>
</footer>
</html>
<?php 
if (isset($_POST['kirim'])) {
	$a=htmlspecialchars($_POST['a']);
	$b=htmlspecialchars($_POST['b']);
	$c=htmlspecialchars($_POST['c']);
	$d=htmlspecialchars($_POST['d']);
	
	
	$koneksi= new mysqli("localhost", "root", "", "karyawan");/* baris ini untuk menghubungkan kedatabase */
	$sql="UPDATE `datakaryawan` SET 
	 nomor='$a', nama='$b', tanggal='$c', alamat='$d' 

";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL diubah');
	
document.location.href = 'daftar karyawan.php';
	</script>";
}

else{
	echo "<script> alert(' data GAGAL diubah');
document.location.href = 'ubah.php';
	
	</script>";
}

}


 ?>
