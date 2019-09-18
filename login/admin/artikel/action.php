<?php
require_once('db.php');

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
	VALUES('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$pil_prodi', '$pil_prodi2',    '$pil_prodi3', '$alamat', '$desa', '$kecamatan', '$kabupaten', '$propinsi', '$kodepos', '$no_telp', '$no_hp', '$email', '$pendidikan_pesantren', '$nama_pesantren', '$lulus', '$lama_pendidikan', '$sd', '$smp', '$sma', '$ayah', '$pendidikan_terakhir', '$penghasilan', '$pelatihan', '$skill', '$username', '$password')";
	mysqli_query($db, $create);
	header("location: index.php");
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

	header("location:index.php");
}

	//Delete Mahasiswa
elseif($module=='mahasiswa' AND $act=='delete'){
		//echo "data dihapus";
	mysqli_query($db, "DELETE FROM mahasiswa WHERE id_siswa='$_GET[id]'");
	header("location:index.php");
}
elseif ($module=='bodojuga' AND $act =='uploadbodo') {
	$ekstensi_diperbolehkan = array('png','jpg','jpeg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 5044070){      
			move_uploaded_file($file_tmp, '../foto/images/'.$nama);
			$query = mysqli_query($db,"INSERT INTO artikel (judul, isi,tanggal, gambar) VALUES ('$judul', '$isi',now(), '$nama')");
			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
				header("location:avatar.php");
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}
elseif($module == 'bodojuga' AND $act == 'delete'){
 mysqli_query($db, "DELETE FROM artikel WHERE id = '$_GET[id]'");
  header("location:avatar.php");
}
?>