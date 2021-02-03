<?php

include 'koneksi.php';

$nama=$_GET['nama'];
$delete=mysqli_query($koneksi,"DELETE FROM tb_daftar WHERE nama='$nama'");
if ($delete) {
	header("location:tampil.php");
}
?>