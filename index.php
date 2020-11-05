<?php
$getjson = file_get_contents('article.json');
$getjson = json_decode($getjson);
 ?>
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

		<!-- CSS -->
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

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Yuk baca artikel di sini</h1>
							</header>
							<div class="content">
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Baca Artikel</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- Article -->
            <?php
            // Read More Function
            function ReadMoreSpace($input, $length){
              $input = strip_tags($input);
              if(strlen($input) == $length){
                return $input;
              }
              $last_space = strrpos(substr($input, 0, $length), ' ');
              $trimmed_text = substr($input, 0, $last_space).'...(baca selengkapnya)';
              return $trimmed_text;
            } ?>
							<section id="one" class="tiles">
                <!-- Print Article -->
								<?php foreach ($getjson->article as $index => $row): ?>
									<article>
									  <span class="image">
									    <img src="<?=$row->picture;?>">
									  </span>
									  <header class="major">
									    <h3><a href="read.php?id=<?= $index; ?>"><?=$row->title;?></a></h3>
									    <?="<p>".ReadMoreSpace($row->content,100)."</p>"?>
									    <br>
									    <p>Ditulis oleh <?=$row->author;?></p>
									    <p>Pada <?=$row->created;?></p>
                      <br>
											<p>Diperbarui oleh <?=$row->editor;?></p>
											<p>Pada <?=$row->edited;?></p>
									  </header>
									</article>
							<?php endforeach; ?>
							</section>

						<!-- New Article -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Tulis Artikelmu Sendiri</h2>
									</header>
									<p>Udah baca semua dan ingin nulis artikel juga? Yuk tulis sekarang. Bagi kamu yang sudah terbiasa menulis,
										teruslah menulis dan jangan pernah lelah berhenti untuk menulis. Bagi kamu yang belum pernah menulis,
										ayo coba sekarang juga. Tuangkan segala pemikiran, ide, cerita ke dalam kertas atau pada gadget kalian.
										Buatlah jari-jarimu menari di atasnya. </p>
									<ul class="actions">
										<li><a href="new-article.php" class="button next">Buat sekarang!</a></li>
									</ul>
								</div>
							</section>

				<!-- Footer -->
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
	</body>
</html>
