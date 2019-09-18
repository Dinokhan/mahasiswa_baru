
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
            
            <li><a href="../foto/form.php"> Back  </a></li>
          </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
      
    <!--header-->
   
             <div class="jumbotron">

      <div class="container">
        <div class="panel panel-default">
          <div class="panel-body">
            <h2>Data Artikel Yang Telah Di Posting</h2>
            <hr>
            <table class="table table-bordered table-hover">
              <tr class="active">
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal Posting</th>
                <th>Opsi</th>
              </tr>
              <?php
              require "db.php";
              $dataku  = mysqli_query($db, "SELECT * FROM artikel") or die(mysqli_error());
              $no = 1;
              while($data = mysqli_fetch_array($dataku)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['judul']; ?></td>
                  <td><?php echo $data['tanggal']; ?></td>

                  <td>

                    <a class="btn btn-danger" title="Delete" onclick=" return confirm('apakah anda yakin akan menghapus data ini ?')"<?php echo "href=\"action.php?module=bodojuga&act=delete&id=$data[id]\""; ?>><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </table>
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
        <script src="../../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../../bootstrap/js/bootstrap-datepicker.js"></script>
        <script>
        $('.date').datepicker({
          format: 'yyyy-mm-dd',
        })
        </script>
</body>
</html>