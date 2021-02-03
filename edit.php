<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<style type="text/css">
		h3{
			margin: 0;
		}
		body{
			background-image: url(foto2.jpg);
			background-repeat: no-repeat;
			background-size: 100%;
			width: 400px;
			top: 50%;
			left: 50%;
			position: fixed;
			margin-top: -300px;
			margin-left: -300px;
		}
		form{
			margin: 0;
		}
		input[type="text"], input[type="number"]{
			width: 300px;
			padding:10px;
			margin-left: 10px;
			margin-bottom: 10px;
		}
		td{
			width: 110px;
			float: left;
		}
	</style>
</head>
<body>
 	<br>
	<a href="tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
	<br>
	<?php
	include 'koneksi.php';
	$nama = $_GET['nama'];
	$data = mysqli_query($koneksi,"select * from tb_daftar where nama='$nama'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="number" name="Umur" value="<?php echo $d['Umur']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jk" value="<?php echo $d['jk']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Gelar</td>
					<td><input type="text" name="Gelar" value="<?php echo $d['Gelar']; ?>"></td>
				</tr>
				<tr>
					<td>Pengalaman</td>
					<td><input type="text" name="Pengalaman" value="<?php echo $d['Pengalaman']; ?>"></td>
				</tr>
				<tr>
					<td>Bidang Keahlian</td>
					<td><input type="text" name="Bidang" value="<?php echo $d['Bidang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html