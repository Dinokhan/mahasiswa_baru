<?php
include("func.php");
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>PMB UNIDA GONTOR</title>
  <!--css-->
  
  <!-- Bootstrap -->
  <link href="../../ami/bootstrap.min.css" rel="stylesheet">
  <link href="../../ami/bootstrap-datepicker.css" rel="stylesheet">
  <link href="../../ami/style1.css" rel="stylesheet">
  <link href="../../ami/style2.css" rel="stylesheet">
  <link href="../../ami/style3.css" rel="stylesheet">

  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
  <style>
  .content {
    margin-top: 50px;
  }
</style> 
</head>

<body> 
  <!--header-->
  
  <div class="header-top">
    <div class="container">
     <div class="top-left">
      <a href="#">&nbsp;&nbsp;&nbsp;<img src="../../assets/images/logo.png" style="width:250px"></a>
    </div>
    <div class="top-right">
      <br>
      <ul>
        <li><a href="../cari/index.php">Login</a></li>
        
        <li><a href="create.php"> Registration </a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>

<!--header-->

<div class="container">
  <div class="jumbotron">
    <h2>Registrasi Pendaftaran &raquo; Tambah Data User</h2>
    <hr /><br><br>
    <h2>Upload</h2>
    <p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 1 MB.</p>
    
    <?php
    include('config.php');
    if($_POST['upload']){
      $allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip' ,'jpg','png');
      $file_name    = $_FILES['file']['name'];
      $file_ext   = strtolower(end(explode('.', $file_name)));
      $file_size    = $_FILES['file']['size'];
      $file_tmp   = $_FILES['file']['tmp_name'];
      
      $nama     = $_POST['nama'];
      $tgl      = date("Y-m-d");
      
      if(in_array($file_ext, $allowed_ext) === true){
        if($file_size < 1044070){
          $lokasi = 'files/'.$nama.'.'.$file_ext;
          move_uploaded_file($file_tmp, $lokasi);
          $in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
          if($in){
            echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
          }else{
            echo '<div class="error">ERROR: Gagal upload file!</div>';
          }
        }else{
          echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
        }
      }else{
        echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
      }
    }
    ?>
    
    <p>
      <form action="" method="post" enctype="multipart/form-data">
        <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
          <tr>
            <td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
          </tr>
          <tr>
            <td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
          </tr>
          <tr>
            <td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>  
  
  <!-- footer -->
  <div class="copy-section">
    <div class="container">
      <div class="copy-left">
        <p>&copy;&nbsp;2018 UNIDA Gontor - All rights reserved.</p>
      </div>
      <!-- icon media sosial -->
      <div class="copy-right">
        
        <div class="social-icon">
          <a href="#"><i class="icon" ></i></a>
          <a href="#"><i class="icon1"></i></a>
          <a href="#"><i class="icon2"></i></a>
          <a href="#"><i class="icon3"></i></a>
        </div>
        
      </div>
      
      <!-- icon media sosial -->
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="../../bootstrap/js/bootstrap-datepicker.js"></script>
  <script>
    $('.date').datepicker({
      format: 'yyyy-mm-dd',
    })
  </script>
</body>
</html>