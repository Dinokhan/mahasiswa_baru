<html>
<head>
	<title>Form Upload Gambar</title>
</head>
<body>
<h1>Form Upload Gambar</h1>
					 <?php
                        require "../db.php";
                        include '../akses.php';
                        include 'upload.php';
                        
                        $query = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_siswa='$_SESSION[id]'");
                        $r     = mysqli_fetch_array($query);
                      ?>
<form method="post" enctype="multipart/form-data" action="upload.php" <?php echo "action=\"action.php?module=mahasiswa&act=update\""; ?>>
	<input type="hidden" name="id" value="<?php echo $r['id_siswa']; ?>">>
	<input type="file" name="gambar" value="<?php echo $r['foto'] ?>">
	<input type="submit" value="Upload">
</form>
</body>
</html>
