<?php
//membuat koneksi kedatabase
include('../../../koneksi.php');

$tgl 		= date('Y-m-d');

if (isset($_POST['submit'])){
 $fileName = $_FILES['gambar']['name'];
  // Simpan ke Database
  $sql = "insert into gambar (gambar, keterangan,tanggal) values ('$fileName', '".$_POST['keterangan']."','$tgl')";
  mysqli_query($koneksi,$sql);
  // Simpan di Folder Gambar
  move_uploaded_file($_FILES['gambar']['tmp_name'], "images/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');</script>";
  header('location:../../../modules/mod_galery/album_photo.php');
 } 

?>

