<!DOCTYPE html>
<html>
<head>
	<title>OUTPUT 3</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>FOTO</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td>:</td>
				<td><input type="submit" name="kirim" value="kirim"></td>
			</tr>
		</table>
	</form>
	
	<?php
		if (isset($_POST["kirim"])) {
			$nama = $_POST["nama"];
			$nama_file = $_FILES["gambar"]["name"];
			$source = $_FILES["gambar"]["tmp_name"];
			$folder = "./images/";

			move_uploaded_file($source, $folder.$nama_file);
	}
	?>
</body>
</html>
</html>