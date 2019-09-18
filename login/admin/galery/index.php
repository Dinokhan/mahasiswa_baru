<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Pondok Pesantren Tahfidz Daar El-Hikmah | Dashboard</title>

	<!-- Bootstrap core CSS -->
	<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" >

	<style type="text/css">
		body{

			background: url("../../../img/1.jpg") no-repeat fixed left;
			max-width: : 100%;
			height: auto;
		}
	</style>


</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../index.php">Daar El-Hikmah</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="../index.php">Dashboard</a></li>
					<li><a href="../Posts/posts.php">Posts</a></li>
					<li><a href="../users/users.php">Users</a></li>
					<li><a href="posts.php">Galery</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="../index.php">Welcome, Afif</a></li>
					<li><a href="../../Logout.php">Logout</a></li>

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
				</div>
				<div class="col-md-2">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="../posts/posts.php">Add Posts</a></li>
								<li><a href="../pendaftaran/pendaftaran.php">Add Users</a></li>
								<li><a href="posts.php">Add Galery</a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</header>
		<br>

		<section id="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li class="active">Mengunggah Foto dan Video Baru</li>
				</ol>
			</div>
		</section>


		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3>Tambah Foto Baru</h3>
						<form method="post" name="posting_form" action="submit.php" enctype="multipart/form-data">
							Keterangan Foto<br>
							<input type="text" name="keterangan"><br>
							<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) :
								<input type="submit" name="submit" value="simpan">
						</form>
					</div>
				
					<div class="col-md-6">
						<h3>Tambah Video Baru</h3>
						<form method="post" name="posting_form" action="submit2.php" enctype="multipart/form-data">
							Keterangan Video<br>
							<input type="text" name="keterangan"><br>
							<td colspan="4">Upload Video (Ukuran Maks = 30 MB) : <input type="file" name="video" id="video" required />
								<input type="submit" name="save" value="simpan">
						</form>
					</div>
				</div>
			</div>
		</section>
		<br><br><br><br><br><br><br><br>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p align="center">Copyright &copy; Pondok Pesantren Tahfidz Daar El-Hikmah 2018</p>
						</div>
					</div>
				</div>
			</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    
    <script src="../../../assets/js/bootstrap.min.js"></script>
</body>
</html>
