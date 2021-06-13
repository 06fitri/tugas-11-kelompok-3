<?php 
$koneksi= new mysqli("localhost", "root", "", "karyawan");

if (isset($_GET['b'])) {


	$ambil=$_GET['b'];
	function hapus($ambil)
	{
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM datakaryawan WHERE nomor=$ambil");
		return mysqli_affected_rows($koneksi);
	}

	if (hapus($ambil)>0) {
		echo "<script> alert('data berhasil dihapus');
		document.location.href='daftar karyawan.php';
		</script>
		";
	}

	else{

		echo "<script> alert('data gagal dihapus');
		document.location.href='daftar karyawan.php';
		</script>
		";

	}
		

	
}

else{


	header("Location : daftar karyawan.php");
}

 ?>
