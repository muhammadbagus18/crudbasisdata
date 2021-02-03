<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$Umur = $_POST['Umur'];
$jk = $_POST['jk'];
$Alamat = $_POST['Alamat'];
$Gelar = $_POST['Gelar'];
$Pengalaman = $_POST['Pengalaman'];
$Bidang = $_POST['Bidang'];
 
// update data ke database
$update=mysqli_query($koneksi,"UPDATE tb_daftar SET nama='$nama', Umur='$Umur', jk='$jk',Alamat='$Alamat',Gelar='$Gelar',Pengalaman='$Pengalaman',Bidang='$Bidang'");
 
// mengalihkan halaman kembali ke tampil.php
if ($update) {
	header("location:tampil.php");
}
?>