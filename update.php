
<!DOCTYPE HTML>
<html>
<!DOCTYPE HTML>
<html>
<head>
<title>PMB UNIDA GONTOR</title>
<!--css-->
  
  <!-- Bootstrap -->
    <link href="../ami/bootstrap.min.css" rel="stylesheet">
    <link href="../ami/bootstrap-datepicker.css" rel="stylesheet">
    <link href="../ami/style1.css" rel="stylesheet">
    <link href="../ami/style2.css" rel="stylesheet">
    <link href="../ami/style3.css" rel="stylesheet">

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
            <a href="#">&nbsp;&nbsp;&nbsp;<img src="../assets/images/logo.png" style="width:250px"></a>
          </div>
          <div class="top-right">
          <br>
          <ul>
           <li><a href="login/index.php">Login</a></li>
          </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
      
    <!--header-->
    <!-- Static navbar -->
     <div class="container">
                    <div class="jumbotron">
                      <h2>Update Biodata &raquo; </h2>
                      <hr /><br><br>
              <?php
                require "db.php";
                $query = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_siswa='$_GET[id]'");
                $r     = mysqli_fetch_array($query);
              ?>
              <form method="POST" <?php echo "action=\"action.php?module=mahasiswa&act=update\""; ?>>
                <input type="hidden" name="id" value="<?php echo $r['id_siswa']; ?>">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $r['nama'] ?>">
                </div> 
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="tempat_lahir" name="tempat_lahir" value="<?php echo $r['tempat_lahir'] ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" placeholder="tanggal_lahir" name="tanggal_lahir" value="<?php echo $r['tanggal_lahir'] ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" class="form-control" placeholder="jenis_kelamin" name="jenis_kelamin" value="<?php echo $r['jenis_kelamin'] ?>">
                </div>
                <div class="form-group">
                  <label>Program Studi 1</label>
                  <input type="text" class="form-control" placeholder="prodi 1" name="pil_prodi" value="<?php echo $r['pil_prodi'] ?>">
                </div>
                <div class="form-group">
                  <label>Program Studi 2</label>
                  <input type="text" class="form-control" placeholder="prodi 2" name="pil_prodi2" value="<?php echo $r['pil_prodi2'] ?>">
                </div>
                <div class="form-group">
                  <label>Program Studi 3</label>
                  <input type="text" class="form-control" placeholder="prodi 3" name="pil_prodi3" value="<?php echo $r['pil_prodi3'] ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $r['alamat'] ?>">
                </div>
                <div class="form-group">
                  <label>Desa</label>
                  <input type="text" class="form-control" placeholder="Desa" name="desa" value="<?php echo $r['desa'] ?>">
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?php echo $r['kecamatan'] ?>">
                </div>
                <div class="form-group">
                  <label>Kabupaten</label>
                  <input type="text" class="form-control" placeholder="Kabupaten" name="kabupaten" value="<?php echo $r['kabupaten'] ?>">
                </div>
                <div class="form-group">
                  <label>Propinsi</label>
                  <input type="text" class="form-control" placeholder="Propinsi" name="propinsi" value="<?php echo $r['propinsi'] ?>">
                </div>
                <div class="form-group">
                  <label>Kode Pos</label>
                  <input type="text" class="form-control" placeholder="Kode Pos" name="kodepos" value="<?php echo $r['kodepos'] ?>">
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" class="form-control" placeholder="No Telp" name="no_telp" value="<?php echo $r['no_telp'] ?>">
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" class="form-control" placeholder="No HP" name="no_hp" value="<?php echo $r['no_hp'] ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $r['email'] ?>">
                </div>
                <div class="form-group">
                  <label>Pendidikan Pesantren</label>
                  <input type="text" class="form-control" placeholder="Pendidikan Pesantren" name="pendidikan_pesantren" value="<?php echo $r['pendidikan_pesantren'] ?>">
                </div>
                <div class="form-group">
                  <label>Nama Pesantren</label>
                  <input type="text" class="form-control" placeholder="Nama Pesantren" name="nama_pesantren" value="<?php echo $r['nama_pesantren'] ?>">
                </div>
                <div class="form-group">
                  <label>Tahun Lulus</label>
                  <input type="text" class="form-control" placeholder="Tahun Lulus" name="lulus" value="<?php echo $r['lulus'] ?>">
                </div>
                <div class="form-group">
                  <label>Lama Pendidikan</label>
                  <input type="text" class="form-control" placeholder="Lama Pendidikan" name="lama_pendidikan" value="<?php echo $r['lama_pendidikan'] ?>">
                </div>
                 <div class="form-group">
                  <label>SD</label>
                  <input type="text" class="form-control" placeholder="SD" name="sd" value="<?php echo $r['sd'] ?>">
                </div>
                 <div class="form-group">
                  <label>SMP</label>
                  <input type="text" class="form-control" placeholder="SMP" name="smp" value="<?php echo $r['smp'] ?>">
                </div>
                <div class="form-group">
                  <label>SMA</label>
                  <input type="text" class="form-control" placeholder="SMA" name="sma" value="<?php echo $r['sma'] ?>">
                </div>
                <div class="form-group">
                  <label>Ayah</label>
                  <input type="text" class="form-control" placeholder="Ayah" name="ayah" value="<?php echo $r['ayah'] ?>">
                </div>
                <div class="form-group">
                  <label>Pendidikan Terakhir</label>
                  <input type="text" class="form-control" placeholder="Pendidikan Terakhir" name="pendidikan_terakhir" value="<?php echo $r['pendidikan_terakhir'] ?>">
                </div>
                <div class="form-group">
                  <label>Penghasilan</label>
                  <input type="text" class="form-control" placeholder="Penghasilan" name="penghasilan" value="<?php echo $r['penghasilan'] ?>">
                </div>
                <div class="form-group">
                  <label>Pelatihan</label>
                  <input type="text" class="form-control" placeholder="Pelatihan" name="pelatihan" value="<?php echo $r['pelatihan'] ?>">
                </div>
                <div class="form-group">
                  <label>Skill</label>
                  <input type="text" class="form-control" placeholder="Skill" name="skill" value="<?php echo $r['skill'] ?>">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $r['username'] ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" placeholder="password" name="password" value="<?php echo $r['password'] ?>">
                </div>
                <a href="index.php" class="btn btn-success" role="button"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Update</button>
                
                  </form>
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
          <!-- footer -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/bootstrap-datepicker.js"></script>
        <script>
        $('.date').datepicker({
          format: 'yyyy-mm-dd',
        })
        </script>
 
</body>
</html>