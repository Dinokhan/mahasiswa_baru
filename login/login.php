<?php
include('db.php');
if(isset($_POST['login'])){
	$user = mysqli_real_escape_string($db,htmlentities($_POST['username']));
	$pass = mysqli_real_escape_string($db,htmlentities($_POST['password']));
 
	$sql = mysqli_query($db,"SELECT * FROM mahasiswa WHERE username='$user' AND password='$pass'") or die(mysqli_error());	
	if(mysqli_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysqli_fetch_assoc($sql);
		
		$_SESSION['leveluser']    = $row['level'];

		if($_SESSION['leveluser'] == 0){
			session_start();
			$_SESSION['id']			  = $row['id_siswa'];
			$_SESSION['namauser']     = $row['username'];
			$_SESSION['passuser']     = $row['password'];
			$_SESSION['namalengkap']  = $row['nama'];
			$_SESSION['email']        = $row['email'];
			$_SESSION['leveluser']    = $row['level'];
			echo '<script language=javascript>alert("Anda berhasil Login sebagai user!"); document.location="user/profile.php";</script>';

		}elseif ($_SESSION['leveluser'] == 1){
			session_start();
			$_SESSION['namauser']     = $row['username'];
			$_SESSION['passuser']     = $row['password'];
			$_SESSION['namalengkap']  = $row['nama'];
			$_SESSION['email']        = $row['email'];
			$_SESSION['leveluser']    = $row['level'];			
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/profile.php";</script>';	
		}
	}
}
?>