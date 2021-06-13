<?php 
$koneksi= new mysqli("localhost", "root", "", "");

$q= "CREATE DATABASE karyawan";

$w= $koneksi->query($q);


if ($w) {
	echo "database berhasil dibuat";
}


else{

	echo "database gagal dibuat";
}



$sql1= "CREATE TABLE `karyawan`.`datakaryawan` ( `nomor` INT NOT NULL , `nama` VARCHAR(50) NOT NULL , `tanggal` VARCHAR(15) NOT NULL , `alamat` VARCHAR(100) NOT NULL ,  PRIMARY KEY (`nomor`)) ENGINE = InnoDB; ";




$q1=$koneksi->query($sql1);

if ($q1) { 
	echo "<br>";
	echo "table berhasil dibuat";
}
else{
echo "<br>";
	echo "table gagal dibuat";
}



 ?>