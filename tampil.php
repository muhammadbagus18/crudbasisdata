<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodytampil">
	<br>
	<a href="form.php">+TAMBAH DATA</a>
	<br>
	<table border="1" class="tabletampil">
		
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>USIA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>GELAR</th>
			<th>PENGALAMAN</th>
			<th>BIDANG</th>
			<th>OPSI</th>
		
	</div>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi ,"select * from tb_daftar");
		while($d = mysqli_fetch_array($data)){
			?>
			
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['Umur']; ?></td>
				<td><?php echo $d['jk']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['Gelar']; ?></td>
				<td><?php echo $d['Pengalaman']; ?></td>
				<td><?php echo $d['Bidang']; ?></td>
				<td>
					<a href="edit.php?nama=<?php echo $d['nama']  ?>" >EDIT</a>
					<a href="hapus.php?nama=<?php echo $d['nama'] ?>">HAPUS</a>
				</td>
			</tr>
		
			<?php 
		}
		?>
	</table>
</body>
</html>