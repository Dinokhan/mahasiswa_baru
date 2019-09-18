<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>E-Library</title>

  <link href="../../assets/css/bootstrap.min.css.map" rel="stylesheet">

  <link href="../../assets/css/bootstrap.css" rel="stylesheet">


  <script src="../../assets/js/bootstrap.js"></script>

  
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  <link href="../../assets/css/carousel.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    body{
      background: url("../../img/b.jpeg") no-repeat fixed left;
      background-size: 100%;
    }
  </style>
</head>


<body>


  <div class="container">
    <header id="header">
      <div class="container">
        <div class="row">
          <img src="../../img/logo-UNIDA-gontor.png" >
        </div>
      </div>
    </header>
    <nav id="menu">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"  aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education">UNIDA E-LIBRARY</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
              <li><a href="tambahbuku.php"><span class="glyphicon glyphicon-book">Buku</span></a></li>
              <li><a href="registrasi.php"><span class="glyphicon glyphicon-user">Anggota</span></a></li>
               <li class="active"><a href="artikel.php"><span class="glyphicon glyphicon-align-justify">Artikel</span></a></li>
              <li><a href="index1.php"><span class="glyphicon glyphicon-eye-open">Buku</span></a></li>
              <li><a href="index2.php"><span class="glyphicon glyphicon-eye-open">Anggota</span></a></li>
              <li><a href="avatar.php"><span class="glyphicon glyphicon-eye-open">Artikel</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-tower">Admin</span></a></li>

              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
              <li><a ></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <div class="jumbotron">

       
          <div class="panel panel-default">
            <div class="panel-body">
            <table>
             <h2 align="center">Buat Artikel</h2>
             <hr>
            </table>
              <form method="POST" enctype="multipart/form-data" <?php echo "action=\"action.php?module=bodojuga&act=uploadbodo\""; ?>>
                <table class="table table-hover">                
                  <tr>
                    <td>Judul Artikel</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" placeholder="Judul Artikel" name="judul"></td>
                  </tr>
                  <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td><textarea class="form-control" placeholder="isi" name="isi"></textarea></td>
                  </tr>
                </tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="file"></td>    
              </table>
              <input type="submit" class="btn btn-primary" value="Kirim" name="upload"></input>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/holder.min.js"></script>
<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>



