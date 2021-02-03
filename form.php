<!DOCTYPE html>
<html>
<head>
	<title>FORM DAFTAR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodyform">
	<div class="divform">
 	<fieldset>
	<legend><h2>MASUKKAN DATA ANDA</h2></legend>
	<br>
	<form method="post" action="index.php">
			<p>			
				<b><label class="labelform">NAMA</label></b>
				<input class="inputform" type="text" name="nama" required="" placeholder="Nama Lengkap">
			</p>
			<p>
				<b><label class="labelform">USIA</label></b>
				<input class="inputform" type="number" name="Umur" required="" placeholder="Usia">
			</p>
			<p>
				<b><label class="labelform">JENIS KELAMIN</label></b>
				<label class="labelradio"><input type="radio" name="jk" value="laki2" required="">Laki-Laki</label>
				<label class="labelradio"><input type="radio" name="jk" value="perempuan" required="">Perempuan</label>
			</p>
			<p>
				<b><label class="labelform">ALAMAT</label></b>
				<textarea class="inputform" name="Alamat" placeholder="Alamat" required=""></textarea>
			</p>
			<p>
				<b><label class="labelform">LULUSAN/GELAR</label></b>
				<input class="inputform" type="text" name="Gelar" placeholder="Gelar" required="">
			</p>
			<p>
				<b><label class="labelform">PENGALAMAN SEBELUMNYA</label></b>
				<input class="inputform" type="text" name="Pengalaman" placeholder="Pengalaman Kerja" required="">
			</p>
			<p>
				<b><label class="labelform">BIDANG KEAHLIAN </label></b>
				<input class="inputform" type="text" name="Bidang" placeholder="Bidang" required="">
			</p>
				<br>
				<p><input type="submit" value="KIRIM DATA" class="buttonform"></p>		
	</form>
</fieldset>
</div>
</body>
</html