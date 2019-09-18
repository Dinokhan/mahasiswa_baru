<html>
<!DOCTYPE HTML>
<html>
<!DOCTYPE HTML>
<html>
<head>
  <title>PMB UNIDA GONTOR</title>
  <!--css-->
  <link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all" />
  
  <!--css-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <script src="../../../js/jquery.min.js"></script>
  <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>

  <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Allerta+Stencil:400,700,900:normal" rel="stylesheet" type="text/css">
  <!-- Bootstrap Core CSS -->
  <link href="../../../bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <!-- Plugins CSS -->
  <link href="../../../assets/css/normalize.css" type="text/css" rel="stylesheet" />
  <link href="../../../assets/css/animate.css" type="text/css" rel="stylesheet" />
  <!-- Main CSS -->
  <link href="../../../assets/css/style.css" type="text/css" rel="stylesheet" />
  <link href="../../../assets/css/responsive.css" type="text/css" rel="stylesheet" />
  <!-- icons -->
  <link href="../../../assets/css/iline-icons.css" type="text/css" rel="stylesheet" />
  <link href="../../../assets/css/magnific-popup.css" type="text/css" rel="stylesheet" />
  <!-- Shortcut icon -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.ico" type="image/x-icon"/>

  <!-- Bootstrap -->

  <link href="../../../ami/bootstrap-datepicker.css" rel="stylesheet">
  
  <style>
  .content {
    margin-top: 50px;
  }
</style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--css-->

<!--search jQuery-->
<script src="js/main.js"></script>
<!--search jQuery-->
<script src="js/responsiveslides.min.js"></script>
<script>
  $(function () {
    $("#slider").responsiveSlides({
      auto: true,
      nav: true,
      speed: 500,
      namespace: "callbacks",
      pager: true,
    });
  });
</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/simpleCart.min.js"></script>
<script src="js/jstarbox.js"></script>
<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
  jQuery(function() {
    jQuery('.starbox').each(function() {
      var starbox = jQuery(this);
      starbox.starbox({
        average: starbox.attr('data-start-value'),
        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
        ghosting: starbox.hasClass('ghosting'),
        autoUpdateAverage: starbox.hasClass('autoupdate'),
        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
        stars: starbox.attr('data-star-count') || 5
      }).bind('starbox-value-changed', function(event, value) {
        if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
        } 
      })
    });
  });
</script>
</head>

<body> 
  <!--header-->
  <div class="header">
    <!-- NAVBAR LANJTUAN -->
    <header class="fallone-navbar" data-id="default-navbar">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a  href="../../../index.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="../../../about.php">
                      HISTORY
                    </a>
                  </li>
                  <li>
                    <a  href="../../../visi.php">
                      VISION & MISION
                    </a>
                  </li>
                  <li>
                    <a  href="../../../karakter.php">
                      CHARACTERISTIC
                    </a>
                  </li>
                  <li>
                    <a  href="../../../recognition.php">
                      RECOGNITION
                    </a>
                  </li>
                  <li>
                    <a  href="profile.php">
                      PROFILE
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="">
                      UNDERGRADUATE PROGRAMS
                    </a>
                  </li>
                  <li>
                    <a  href="#">
                      POSTGRADUATE PROGRAMS
                    </a>
                  </li>

                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CENTERS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="../../../cios.php">
                      CIOS - CENTER OF ISLAMIC AND OCCINDENTAL STUDIES
                    </a>
                  </li>
                  <li>
                    <a  href="../../../ulama.php">
                      TRAINING FOR ULAMA
                    </a>
                  </li>
                  <li>
                    <a  href="../../../islami.php">
                      CENTER FOR ISLAMIZATION SCIENCES
                    </a>
                  </li> 
                  <li>
                    <a  href="../../../language.php">
                      LANGUAGE CENTER
                    </a>
                  </li>

                </ul>
              </li>
              <li><a  href="../../../network.php">Network</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">STUDENT<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="../../../student.php">
                      STUDENTS ORGANIZATION
                    </a>
                  </li>

                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ADMISIONS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="../../../login/user/create.php">
                      UNDERGRADUATE PROGRAMS
                    </a>
                  </li>
                  <li>
                    <a  href="#">
                      POSTGRADUATE PROGRAMS
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">REQUIREMENTS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a  href="../../../info.php">
                      UNDERGRADUATE PROGRAMS
                    </a>
                  </li>
                  <li>
                    <a  href="#">
                      POSTGRADUATE PROGRAMS
                    </a>
                  </li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- NAVBAR LANJTUAN -->
    <div class="header-top">
      <div class="container">
       <div class="top-left">
        <a href="#">&nbsp;&nbsp;&nbsp;<img src="../../../assets/images/logo.png" style="width:250px"></a>
      </div>
      <div class="top-right">
        <br>
        <ul>

          
          <li><a href="../profile.php"> Opsi </a></li>
          <li><a href="#"> Help </a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--header-->



<div class="container">	
  <h1>Form Upload Gambar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Form Upload Artikel</h1>
  <div class="col-md-4 " data-animation="animated zoomInUp">
   <img src="images/upload.svg" ><br>
   <form  method="post" enctype="multipart/form-data" action="upload.php">
     <input class="btn btn-primary " type="file" name="gambar">
     <input class="btn btn-primary btn-lg" type="submit" value="Upload">
   </form>	
 </div>
 <div class="col-md-8 footer-grid">
 <div class="container"></div>
   <form method="POST" enctype="multipart/form-data" <?php echo "action=\"../artikel/action.php?module=bodojuga&act=uploadbodo\""; ?>>
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
              <input  type="submit" class="btn btn-primary" value="Kirim" name="upload"></input>
              <a href="../artikel/avatar.php" class="btn btn-success" ><i class="glyphicon glyphicon-chevron"></i> View</a>
            </form>
          </div>  
        </div>

</div>
<div class="container">	

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../../bootstrap/js/bootstrap-datepicker.js"></script>
<script src="../../../assets/js/libs/jquery-1.11.2.min.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../../assets/js/libs/jqBootstrapValidation.js"></script>
<script src="../../../assets/js/libs/imagesloaded.pkgd.min.js"></script>
<script src="../../../assets/js/libs/imagesloaded.js"></script>
<script src="../../../assets/js/libs/jquery.magnific-popup.min.js"></script>
<script src="../../../assets/js/libs/isotope.pkgd.min.js"></script>
<script src="../../../assets/js/libs/ParallaxScrolling.js"></script>
<script src="../../../assets/js/libs/jquery.mailchimp.js"></script>
<script src="../../../assets/js/libs/wow.min.js"></script>
<script src="../../../assets/js/libs/jquery.fittext.js"></script>
<script src="../../../assets/js/libs/jquery.lettering.js"></script>
<script src="../../../assets/js/libs/jquery.textillate.js"></script>

<!-- Main JS -->
<script src="../../../assets/js/main.js"></script>
</body>
</html>
