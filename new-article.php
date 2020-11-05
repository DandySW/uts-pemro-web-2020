<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pemrograman Berbasis Web</title>
		<link rel="shortcut icon" href="assets\icon.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>UTS</strong> <span>Pemgrograman Berbasis Web - B</span></a>
					<nav>
						<a href="http://b.pbw.ilkom.unej.ac.id/182410101001/">Other Directory</a>
					</nav>
				</header>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
												<!-- Form -->
													<h2>Tulis di sini</h2>
													<form method="POST" action="create.php" enctype="multipart/form-data">
														<div class="row gtr-uniform">
															<div class="col-12">
																<input type="text" name="title" id="title" placeholder="Judul Artikel" required="require"/>
															</div>
															<div class="col-12">
																<label for="author">Penulis</label>
																<input type="text" name="author" id="author" placeholder="Nama Kamu" required="require"/>
															</div>
															<div class="col-12">
																<label for="picture">Link Gambar</label>
																<input type="text" name="picture" id="picture" placeholder="Upload gambar lalu taruh linknya di sini"/>
															</div>
															<div class="col-12">
																<label for="content">Tulis Di sini</label>
																<textarea name="content" id="content" placeholder="Tulis artikelmu" rows="6" required="require"></textarea>
															</div>
															<input type="text" name="created" id="created" style="display: none" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('j F Y'); ?>"/>
															<input name="editor" type="text" id="editor"  style="display: none"/>
															<input name="edited" type="text" id="edited" style="display: none"/>

															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="Kirim Artikel" class="primary" /></li>
																	<li><input type="reset" value="Reset Form" /></li>
																</ul>
															</div>
														</div>
													</form>
				<!-- Footer -->
        <hr>
        <footer id="footer">
          <div class="inner">
						<ul class="icons">
							<li><a href="https://www.facebook.com/dandysatriow" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=628223479673" class="icon brands alt fa-whatsapp"><span class="label">Whatsapp</span></a></li>
							<li><a href="https://www.instagram.com/dandysatriow" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright &copy; <a href="https://mmp.unej.ac.id/user/profile.php?id=73763">182410101001</a> - 2020</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
						</ul>
          </div>
        </footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="ckeditor/ckeditor.js"></script>
			<script>CKEDITOR.replace('content')</script>
	</body>
</html>
