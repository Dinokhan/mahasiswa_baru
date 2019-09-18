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
            <li><a href="../index.php">Login</a></li>   
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
                      <h2>Registrasi Pendaftaran &raquo; Tambah Data User</h2>
                      <hr /><br><br>
                  <form  class="form-horizontal" method="POST" <?php echo "action=\"action.php?module=mahasiswa&act=create\""; ?>>
                    <blockquote>
                        <div class="container red" ><i style="font-size: 16px">Pendaftar tidak diperkenankan mengisi form lebih dari sekali. Untuk itu, pastikan data Anda telah siap dan akurat sebelum mengisi form ini. </i></div>
                      </blockquote>
                      <h3>&nbsp;&nbsp;&nbsp;A. Informasi Umum &raquo;</h3><br><br>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama_Siswa" name="nama">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tempat Lahir</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Tempat_Lahir" name="tempat_lahir" >
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal Lahir</label>
                        <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker">
                          <input class="form-control" placeholder="0000-00-00" type="text" name="tanggal_lahir" >
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" >
                         </div>
                      </div><br>
                      <h3>&nbsp;&nbsp;&nbsp;B. Pemilihan Program Studi &raquo;</h3><br><br>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Program Studi</label>
                          <div class="col-sm-4">
                          <select name="pil_prodi" class="form-control" placeholder="pil_prodi" name="pil_prodi">
                            <option value="">Jurusan</option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="Pendidikan Bahasa Arab">Pendidikan Bahasa Arab</option>
                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                            <option value="Studi Agama - Agama">Studi Agama - Agama</option>
                            <option value="Ilmu Aqidah">Ilmu Aqidah</option>
                            <option value="Ilmu Al Qur'an dan Tafsir">Ilmu Al Qur'an dan Tafsir</option>
                            <option value="Perbandingan Madhab dan Hukum">Perbandingan Madhab dan Hukum</option>
                            <option value="Hukum Ekonomi Syariah">Hukum Ekonomi Syariah</option>
                            <option value="Agroteknologi Pertanian">Agroteknologi Pertanian</option>
                            <option value="Ilmu Hubungan Internasional">Ilmu Hubungan Internasional</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Perikanan">Perikanan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Program Studi</label>
                          <div class="col-sm-4">
                          <select class="form-control" placeholder="pil_prodi" name="pil_prodi2">
                             <option value="">Jurusan</option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="Pendidikan Bahasa Arab">Pendidikan Bahasa Arab</option>
                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                            <option value="Studi Agama - Agama">Studi Agama - Agama</option>
                            <option value="Ilmu Aqidah">Ilmu Aqidah</option>
                            <option value="Ilmu Al Qur'an dan Tafsir">Ilmu Al Qur'an dan Tafsir</option>
                            <option value="Perbandingan Madhab dan Hukum">Perbandingan Madhab dan Hukum</option>
                            <option value="Hukum Ekonomi Syariah">Hukum Ekonomi Syariah</option>
                            <option value="Agroteknologi Pertanian">Agroteknologi Pertanian</option>
                            <option value="Ilmu Hubungan Internasional">Ilmu Hubungan Internasional</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Perikanan">Perikanan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Program Studi</label>
                          <div class="col-sm-4">
                          <select  class="form-control" placeholder="pil_prodi" name="pil_prodi3">
                            <option value="">Jurusan</option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="Pendidikan Bahasa Arab">Pendidikan Bahasa Arab</option>
                            <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                            <option value="Studi Agama - Agama">Studi Agama - Agama</option>
                            <option value="Ilmu Aqidah">Ilmu Aqidah</option>
                            <option value="Ilmu Al Qur'an dan Tafsir">Ilmu Al Qur'an dan Tafsir</option>
                            <option value="Perbandingan Madhab dan Hukum">Perbandingan Madhab dan Hukum</option>
                            <option value="Hukum Ekonomi Syariah">Hukum Ekonomi Syariah</option>
                            <option value="Agroteknologi Pertanian">Agroteknologi Pertanian</option>
                            <option value="Ilmu Hubungan Internasional">Ilmu Hubungan Internasional</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Perikanan">Perikanan</option>
                          </select>
                        </div>
                      </div><br>
                      <h3>&nbsp;&nbsp;&nbsp;C. Identitas Diri &raquo;</h3><br><br>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-5">
                        <textarea rows="4" name="alamat"></textarea>
                         </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-3 control-label">Desa/Kelurahan</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Desa/Kelurahan" name="desa">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Kecamatan</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Kabupaten/Kota</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kabupaten">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Propinsi</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Propinsi" name="propinsi">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">KodePos</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="KodePos" name="kodepos">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">No. Telp</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="No. Telp" name="no_telp">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">No. Handphone</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="No. Handphone" name="no_hp">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Email Address</label>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Pendidikan Pesantren</label>
                          <div class="col-sm-2">
                          <select  class="form-control" placeholder="pil_prodi" name="pendidikan_pesantren">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Pesantren</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Nama Pesantren" name="nama_pesantren">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun Lulus</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Tahun Lulus" name="lulus">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Lama Pendidikan</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Lama Pendidikan" name="lama_pendidikan">
                         </div>
                      </div><br>
                      <h3>&nbsp;&nbsp;&nbsp;D. Riwayat Pendidikan&raquo;</h3><br><br>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">SD / MI</label>
                        <div class="col-sm-5">
                        <textarea rows="4" name="sd"></textarea>
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">SMP / TSANAWIYAH</label>
                        <div class="col-sm-5">
                        <textarea rows="4" name="smp"></textarea>
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">SMA / SMK/ MA</label>
                        <div class="col-sm-5">
                        <textarea rows="4" name="sma"></textarea>
                         </div>
                      </div><br>
                      <h3>&nbsp;&nbsp;&nbsp;E. Identitas Orang Tua&raquo;</h3><br><br>
                        
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Ayah</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Nama Ayah" name="ayah">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Pendidikan Terakhir</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Pendidikan Terakhir" name="pendidikan_terakhir">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Penghasilan Per Bulan</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Penghasilan Per Bulan" name="penghasilan">
                        </div>
                      </div><br><br>
                      <h3>&nbsp;&nbsp;&nbsp;F. Diklat / Penataran&raquo;</h3><br><br>
                        
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Pelatihan yang pernah diikuti </label>
                        <div class="col-sm-5">
                        <textarea rows="4" name="pelatihan"></textarea>
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Skill/Keterampilan/Bakat yang dimiliki  </label>
                        <div class="col-sm-5">
                        <textarea rows="4" name="skill"></textarea>
                         </div>
                      </div>
                      <h3>&nbsp;&nbsp;&nbsp;G. Login &raquo;</h3><br><br>
                       
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Password" name="password">
                        </div>
                      </div><br><br>
                      <label class="col-sm-3 control-label">&nbsp;</label>
                        <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send</button><br><br>
                        </div>
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