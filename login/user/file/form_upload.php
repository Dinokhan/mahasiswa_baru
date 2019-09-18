
<!DOCTYPE HTML>
<html>
<head>
  <title>PMB UNIDA GONTOR</title>
  <!--css-->
  
  <!-- Bootstrap -->
  <link href="../../../ami/bootstrap.min.css" rel="stylesheet">
  <link href="../../../ami/bootstrap-datepicker.css" rel="stylesheet">
  <link href="../../../ami/style1.css" rel="stylesheet">
  <link href="../../../ami/style2.css" rel="stylesheet">
  <link href="../../../ami/style3.css" rel="stylesheet">

  <link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
      <a href="#">&nbsp;&nbsp;&nbsp;<img src="../../../assets/images/logo.png" style="width:250px"></a>
    </div>
    <div class="top-right">
      <br>
      <ul>
        <li><a href="../profile.php">Opsi</a></li>

        <li><a href="#"> Help </a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>

<!--header-->

<div class="container">
  <div class="jumbotron">
    <h2>Upload Berkas File - File  &raquo; Persyaratan</h2>
    <hr /><br><br>
    <form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
    	<label class="col-md-2" >Nama Lengkap  </label><input type="text" name="nama_siswa"><br><br>
      <label class="col-md-2">File Diupload  </label><input type="file" name="fupload"><br><br>
      <label class="col-md-2">Deskripsi File : </label>

      <textarea name="deskripsi" rows="8" cols="40"></textarea><br>
      
      <a href="../profile.php" class="btn btn-success" role="button"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
      <label class="col-md-1"><input class="btn btn-success" type=submit value=Upload></label>
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
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../../bootstrap/js/bootstrap-datepicker.js"></script>

</body>
</html>