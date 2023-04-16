<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h1>Isi Biodata</h1>
	<form action="process.php" method="POST">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="umur">Umur:</label>
		<input type="number" id="umur" name="umur"><br><br>
		<label for="alamat">Alamat:</label>
		<textarea id="alamat" name="alamat"></textarea><br><br>
		<label for="hobi">Hobi:</label>
		<input type="text" id="hobi" name="hobi"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="telepon">Telepon:</label>
		<input type="tel" id="telepon" name="telepon"><br><br>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>
