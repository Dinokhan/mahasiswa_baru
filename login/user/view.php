
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
   
      <div class="header-top">
        <div class="container">
           <div class="top-left">
            <a href="#">&nbsp;&nbsp;&nbsp;<img src="../../assets/images/logo.png" style="width:250px"></a>
          </div>
          <div class="top-right">
          <br>
          <ul>
            <li><a id="logout" href="../../index.php">Home</a></li>
            <li><a href="profile.php"> Opsi </a></li>  
          </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
      
    <!--header-->
    
                   <div class="container">
                    <div class="jumbotron">
                      <h2>View Data &raquo; </h2>
                      <hr /><br><br>
                    <h2>Data Mahasiswa UNIDA</h2>
                    <hr>
                    <div class="panel panel-default">
                      <div class="panel-body">
                         <?php
                          require "../db.php";
                          include 'akses.php';
                          $query = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_siswa='$_SESSION[id] '");
                          $r     = mysqli_fetch_array($query);
                          ?>
                        <table class="table table-hover">
                        <h5>A. Informasi Umum</h5><br>
                          <tr>
                            <td width="20%" class="ami">Nama Lengkap</td>
                            <td ><?php echo $r["nama"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Tempat Lahir</td>
                            <td><?php echo $r["tempat_lahir"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Tanggal Lahir</td>
                            <td ><?php echo $r["tanggal_lahir"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Jenis Kelamin</td>
                            <td ><?php echo $r["jenis_kelamin"]; ?></td>
                          </tr>
                        </table>
                        <table class="table table-hover">
                        <h5>B. PILIHAN PROGRAM STUDI</h5><br>
                          <tr>
                            <td width="22%" class="ami">Program Studi</td>
                            <td ><?php echo $r["pil_prodi"]; ?></td>
                          </tr>
                          <tr>
                            <td width="22%" class="ami">Program Studi 2</td>
                            <td ><?php echo $r["pil_prodi2"]; ?></td>
                          </tr>
                          <tr>
                            <td width="22%" class="ami">Program Studi 3</td>
                            <td ><?php echo $r["pil_prodi3"]; ?></td>
                          </tr>
                        </table>
                        <table class="table table-hover">
                        <h5>C. IDENTITAS DIRI</h5><br>
                          <tr>
                            <td width="20%" class="ami">Alamat</td>
                            <td ><?php echo $r["alamat"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Desa</td>
                            <td ><?php echo $r["desa"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Kecamatan</td>
                            <td ><?php echo $r["kecamatan"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Kabupaten</td>
                            <td ><?php echo $r["kabupaten"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Propinsi</td>
                            <td ><?php echo $r["propinsi"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Kode Pos</td>
                            <td ><?php echo $r["kodepos"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">No Telp</td>
                            <td ><?php echo $r["no_telp"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">No Handphone</td>
                            <td ><?php echo $r["no_hp"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Email</td>
                            <td ><?php echo $r["email"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Pendidikan Pesantren</td>
                            <td ><?php echo $r["pendidikan_pesantren"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Nama Pesantren</td>
                            <td ><?php echo $r["nama_pesantren"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Lulus</td>
                            <td ><?php echo $r["lulus"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Lama Pendidikan</td>
                            <td ><?php echo $r["lama_pendidikan"]; ?></td>
                          </tr>
                        </table>
                        <table class="table table-hover">
                        <h5>D. RIWAYAT PENDIDIKAN</h5><br>
                          <tr>
                            <td width="20%" class="ami">SD</td>
                            <td ><?php echo $r["sd"]; ?></td>
                          </tr>
                           <tr>
                            <td width="20%" class="ami">SMP</td>
                            <td ><?php echo $r["smp"]; ?></td>
                          </tr>
                           <tr>
                            <td width="20%" class="ami">SMA</td>
                            <td ><?php echo $r["sma"]; ?></td>
                          </tr>
                        </table>
                        <table class="table table-hover">
                        <h5>E. IDENTITAS ORANG TUA</h5><br>
                          <tr>
                            <td width="20%" class="ami">Ayah</td>
                            <td ><?php echo $r["ayah"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Pend. Terakhir</td>
                            <td ><?php echo $r["pendidikan_terakhir"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Penghasilan</td>
                            <td ><?php echo $r["penghasilan"]; ?></td>
                          </tr>
                        </table>
                        <table class="table table-hover">
                        <h5>F. DIKLAT / PENATARAN / PELATIHAN</h5><br>
                          <tr>
                            <td width="20%" class="ami">Pelatihan</td>
                            <td ><?php echo $r["pelatihan"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Skill</td>
                            <td ><?php echo $r["skill"]; ?></td>
                          </tr>
                        </table>
                        <table class="table table-hover">
                        <h5>H. Login User</h5><br>
                          <tr>
                            <td width="20%" class="ami">Username</td>
                            <td ><?php echo $r["username"]; ?></td>
                          </tr>
                          <tr>
                            <td width="20%" class="ami">Password</td>
                            <td ><?php echo $r["password"]; ?></td>
                          </tr>
                          
                        </table>
                          </div>
                        </div>
                          <a href="profile.php" class="btn btn-success" role="button"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                          <a href="update.php" class="btn btn-success" role="button"><i class="glyphicon glyphicon-send"></i> Update My data </a>
                           
                          
                  </div>
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