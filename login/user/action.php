<?php
require_once('../db.php');
$module = $_GET['module'];
$act    = $_GET['act'];
	//Create User
if ($module=='mahasiswa' AND $act=='create'){
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$pil_prodi = $_POST['pil_prodi'];
	$pil_prodi2 = $_POST['pil_prodi2'];
	$pil_prodi3 = $_POST['pil_prodi3'];
	$alamat = $_POST['alamat'];
	$desa = $_POST['desa'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$propinsi = $_POST['propinsi'];
	$kodepos = $_POST['kodepos'];
	$no_telp = $_POST['no_telp'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$pendidikan_pesantren = $_POST['pendidikan_pesantren'];
	$nama_pesantren = $_POST['nama_pesantren'];
	$lulus = $_POST['lulus'];
	$lama_pendidikan = $_POST['lama_pendidikan'];
	$sd = $_POST['sd'];
	$smp = $_POST['smp'];
	$sma = $_POST['sma'];
	$ayah = $_POST['ayah'];
	$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
	$penghasilan = $_POST['penghasilan'];	
	$pelatihan = $_POST['pelatihan'];
	$skill = $_POST['skill'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	$create = "INSERT INTO mahasiswa(nama, tempat_lahir, tanggal_lahir, jenis_kelamin, pil_prodi, pil_prodi2, pil_prodi3, alamat, desa, kecamatan, kabupaten, propinsi, kodepos, no_telp, no_hp, email, pendidikan_pesantren, nama_pesantren, lulus, lama_pendidikan, sd, smp, sma, ayah, pendidikan_terakhir, penghasilan, pelatihan, skill, username, password)
	VALUES('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$pil_prodi', '$pil_prodi2',    '$pil_prodi3', '$alamat', '$desa', '$kecamatan', '$kabupaten', '$propinsi', '$kodepos', '$no_telp', '$no_hp', '$email', '$pendidikan_pesantren', '$nama_pesantren', '$lulus', '$lama_pendidikan', '$sd', '$smp', '$sma', '$ayah', '$pendidikan_terakhir', '$penghasilan', '$pelatihan', '$skill', '$username', '$password' )";
	mysqli_query($db, $create);
	header("location: alert.php");
}	

	//Update mahasiswa
elseif ($module=='mahasiswa' AND $act=='update'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$pil_prodi = $_POST['pil_prodi'];
	$pil_prodi2 = $_POST['pil_prodi2'];
	$pil_prodi3 = $_POST['pil_prodi3'];
	$alamat = $_POST['alamat'];
	$desa = $_POST['desa'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$propinsi = $_POST['propinsi'];
	$kodepos = $_POST['kodepos'];
	$no_telp = $_POST['no_telp'];
	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];
	$pendidikan_pesantren = $_POST['pendidikan_pesantren'];
	$nama_pesantren = $_POST['nama_pesantren'];
	$lulus = $_POST['lulus'];
	$lama_pendidikan = $_POST['lama_pendidikan'];
	$sd = $_POST['sd'];
	$smp = $_POST['smp'];
	$sma = $_POST['sma'];
	$ayah = $_POST['ayah'];
	$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
	$penghasilan = $_POST['penghasilan'];	
	$pelatihan = $_POST['pelatihan'];
	$skill = $_POST['skill'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$update = "UPDATE mahasiswa SET nama = '$nama',
	tempat_lahir = '$tempat_lahir',
	tanggal_lahir = '$tanggal_lahir',
	jenis_kelamin = '$jenis_kelamin',
	pil_prodi = '$pil_prodi',
	pil_prodi2 = '$pil_prodi2',
	pil_prodi3 = '$pil_prodi3',
	alamat = '$alamat',
	desa = '$desa',
	kecamatan = '$kecamatan',
	kabupaten = '$kabupaten',
	propinsi = '$propinsi',
	kodepos = '$kodepos',
	no_telp = '$no_telp',
	email = '$email',
	pendidikan_pesantren = '$pendidikan_pesantren',
	nama_pesantren = '$nama_pesantren',
	lulus = '$lulus',
	lama_pendidikan = '$lama_pendidikan',
	sd = '$sd',
	smp = '$smp',
	sma = '$sma',
	ayah = '$ayah',
	pendidikan_terakhir = '$pendidikan_terakhir',
	penghasilan = '$penghasilan',
	pelatihan = '$pelatihan',
	skill = '$skill',
	username = '$username',
	password = '$password' WHERE id_siswa = '$id'";
	mysqli_query($db, $update);

	header("location: profile.php");
}

	//Delete Mahasiswa
elseif($module=='mahasiswa' AND $act=='delete'){
		//echo "data dihapus";
	mysqli_query($db, "DELETE FROM mahasiswa WHERE id_siswa='$_GET[id]'");
	header("location:profile.php");
}
elseif ($module=='mahasiswa' AND $act=='image') {
		# code...
}

?>