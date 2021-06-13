

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	

<tr>
	<td>Nomor</td>
	<td><input type="text" name="a" id="a" autofocus="" autocomplete="off" required="" minlength="3"></td>
</tr>
<tr>
	<td>Nama</td>
	<td><input type="text" name="b" id="b" autocomplete="off" required="" minlength="3"></td>
	</tr>
	<tr>
	<td>Tanggal</td>
	<td><input type="date" name="c" id="c" autocomplete="off" required="" minlength="1"></td>
	</tr>
	<td>Alamat</td>
	<td><textarea required=""  name="d" id="d"></textarea></td>
	</tr>
	
<td></td>

	<td> 
<button type="submit" name="kirim">Kirim</button>
<b><button><a href="daftar karyawan.php" style="text-decoration: none;">kembali kedaftar</a></button></b>
</td>
</tr>
</table>
</center>
</body>
<footer >
<div style="text-align: right;position: fixed;z-index:100;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height:7;display:block !important; color: green;"><b>Kelompok III</b></div>
</footer>
</html>
<?php 
if (isset($_POST['kirim'])) {

	$no=htmlspecialchars($_POST['a']);
	$nama=htmlspecialchars($_POST['b']);
	$tanggal=htmlspecialchars($_POST['c']);
	$alamat=htmlspecialchars($_POST['d']);	
	$koneksi= new mysqli("localhost", "root", "", "karyawan");/* baris ini untuk menghubungkan kedatabase */
	$sql="INSERT INTO `datakaryawan` VALUES ('".$no."', '".$nama."', '".$tanggal."', '".$alamat."');";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL tambahkan');
document.location.href = 'daftar karyawan.php';
	
	</script>";
}

else{
	echo "<script> alert(' data GAGAL tambahkan');
document.location.href = 'daftar karyawan.php';
	</script>";
}

}



 ?>
