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
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_daftar values('$nama','$Umur','$jk','$Alamat','$Gelar','$Pengalaman','$Bidang')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>