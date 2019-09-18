<?php


//membuat koneksi kedatabase
include('../../../koneksi.php');

$tgl 		= date('Y-m-d');

if(isset($_POST['save'])){
 $fileName = $_FILES['video']['name'];
  // Simpan ke Database
  $sql = "insert into video (video, keterangan,tanggal) values ('$fileName', '".$_POST['keterangan']."','$tgl')";
  mysqli_query($koneksi,$sql);
  // Simpan di Folder Gambar
  move_uploaded_file($_FILES['video']['tmp_name'], "videos/".$_FILES['video']['name']);
  echo"<script>alert('Video Berhasil diupload !');</script>";
  header('location:../../../modules/mod_galery/album_video.php');
 } 

?>
