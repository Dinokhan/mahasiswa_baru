
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

<!--search jQuery-->
<script src="../../../js/main.js"></script>
<!--search jQuery-->
<script src="../../../js/responsiveslides.min.js"></script>
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
							<li class="active"><a  href="../../index.php">Home</a></li>
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
										<a  href="../create.php">
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
		<!-- header -->
		<!-- NAVBAR LANJTUAN -->
		<div class="header-top">
			<div class="container">
				<div class="top-left">
					<a href="#">&nbsp;&nbsp;&nbsp;<img src="../../../assets/images/logo.png" style="width:250px"></a>
				</div>
				<div class="top-right">
					<br>
					<ul>
						<li><a href="../../index.php">Login</a></li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!--header-->
	<!--banner-->
	<div class="banner-w3">
		<div class="demo-1">            
			<div id="example1" class="core-slider core-slider__carousel example_1">
				<div class="core-slider_viewport">
					<div class="core-slider_list">
						<div class="core-slider_item">
							<img src="images/back.png" class="img-responsive" alt="">
						</div>
						<div class="core-slider_item">
							<img src="images/back.png" class="img-responsive" alt="">
						</div>
						<div class="core-slider_item">
							<img src="images/back.png" class="img-responsive" alt="">
						</div>
						<div class="core-slider_item">
							<img src="images/back.png" class="img-responsive" alt="">
						</div>
					</div>
				</div>
				<div class="core-slider_nav">
					<div class="core-slider_arrow core-slider_arrow__right"></div>
					<div class="core-slider_arrow core-slider_arrow__left"></div>
				</div>
				<div class="core-slider_control-nav"></div>
			</div>
		</div>
		<link href="css/coreSlider.css" rel="stylesheet" type="text/css">
		<script src="js/coreSlider.js"></script>
		<script>
			$('#example1').coreSlider({
				pauseOnHover: false,
				interval: 3000,
				controlNavEnabled: true
			});

		</script>
	</div>	
	<div class="container">	
		<div class="row">
			<div class="col-md-8">    
				<h1 align="center">Foto - Foto Unida</h1>

				<?php  
				require "../db.php";
				$a  = mysqli_query($db, "SELECT * FROM artikel") or die(mysqli_error());
				$no = 1;
				while($data = mysqli_fetch_array($a)){
					?>

					<div class="panel panel-success">
						<div class="panel-heading">
							<h1 align="center" class="panel-title"><?php echo $data['judul']; ?></h1>
						</div>
						<div class="panel-body">
							<div class="list-group">

								<a href="images/<?php echo $data['gambar']; ?>"><img class="img-responsive center-block" src="images/<?php echo $data['gambar']; ?>" ></a>
								<h5 align="center"><?php echo $data['isi']; ?></h5>
								<h4><?php echo $data['tanggal']; ?></h4>

							</div>
						</div>
					</div>

				<?php } ?>
			</div>
			<h1>Galery Mingguan</h1>
		<?php		// Load file db.php
		include "../../db.php";

									$query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
									$sql = mysqli_query($db, $query); // Eksekusi/Jalankan query dari variabel $query
									$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

									if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
										while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
											echo "&nbsp&nbsp&nbsp
											<img src='images/".$data['nama']."' width='300' height='300'>. </br> . </br>";

										}
									}else{ // Jika data tidak ada
										echo "<tr><td colspan='4'>Belum Diupload</td></tr>";
									}
									?>
								</div>
							</div>

							<!--footer-->
							<section class="white">		

								<!-- footer -->
								<!-- Features -->
								<!-- Features -->
								<div class="footer-w3l">
									<div class="container">
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">EDUCATION</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Islamic Education <br>
												- Arabic Language Teaching <br>
											</p>
										</div>
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">USHULUDDIN</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Comparative Study of Religion  <br>
												- Aqidah and Islamic Thought <br>
												- Al-Qur’an and Tafsir <br>
											</p>
										</div>
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">SHARI’AH</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Comparative School of Law <br>
												- Islamic Economic Laws <br>
											</p>
										</div>
									</div>
									<div class="container">
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">SCIENCE AND TECHNOLOGY</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Information Technology <br>
												- Agro-industrial Technology <br>
												- Agro-technology <br>
											</p> 
										</div>
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">HUMANITIES</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- International Relations <br>
												- Communication Sciences <br>
											</p>
										</div>
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">HEALTH</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Pharmacy <br>
												- Nutrition <br>
												- Occupational Safety and Health <br>
											</p>
										</div>
									</div>
									<div class="container">
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">ECONOMICS AND MANAGEMENT</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Islamic Economic Laws <br>
												- Business Management <br>
											</p> 
										</div>
										<div class="col-md-4 mar-bottom-md">

											<h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s" style="color: white;">POSTGRADUATE</h2>
											<span class="line-sep-gray"></span>
											<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="color: white;">
												- Department of Islamic Theology <br>
												- Arabic Language Teaching <br>
											</p>
										</div>

									</div>
								</div>
								<!-- /Features -->
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

								<!-- kembali keatas -->
								<div id="back-to-top" class="back-to-top">
									<a href="#" class="icon iline2-thin16 no-margin"></a>
								</div>
								<!-- kembali keatas -->
								<!-- footer -->
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