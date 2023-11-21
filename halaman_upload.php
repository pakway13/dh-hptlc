<!DOCTYPE html>
<html>
<head>
	<title>DH-HPTLC</title>
</head>
<body style="width: 800px; margin: auto; padding: 10px;">
	<h2 style="text-align: center;">Form Upload File</h2>
	<hr>
	<form action="ScriptFileUpload.php" method="post" enctype="multipart/form-data">
		<b>Kode :</b>
		<input type="text" name="kode" value="" placeholder=""><br /><br />
		<b>Judul :</b>
		<input type="text" name="nama" value="" placeholder=""><br /><br />
		<b>Upload File :</b>
		<input type="file" name="berkas" accept="application/pdf">
		<button type="submit">Upload File</button> <button> <a href="admin.php">Kembali</a></button>
	</form>
	<hr>
</body>
</html>