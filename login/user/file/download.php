
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
          <li><a href="../../admin/profile.php">Opsi</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<!--header-->

<div class="container">
  <div class="jumbotron"> 
    <h2 align="center">Data Kelengkapan dari User</h2><br><br>
    <?php
    $konek = mysqli_connect("localhost","root","","dbsimb");

    $query = "SELECT * FROM upload ORDER BY id_upload DESC";
    $hasil = mysqli_query($konek, $query);

    while ($r = mysqli_fetch_array($hasil)){
     echo "<h2><a href=\"donlot.php?file=$r[nama_file]\">Download File</a><br></h2>";
     ?>
      <h4>Nama Siswa :<?php echo $r['nama_siswa']; ?></h4>
      <h4>Nama file : <?php echo $r['nama_file']; ?></h4>
      <h4>Deksripsi : <?php echo $r['deskripsi']; ?></h4>
      <br><br>
     <?php } ?>
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