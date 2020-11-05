<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $jsonfile = file_get_contents('article.json');
    $getjson = json_decode($jsonfile, true);
    $value = $getjson["article"];
    $data = $value[$id];

}

?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
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
					<header id="header">
						<a href="index.php" class="logo"><strong>UTS</strong> <span>Pemgrograman Berbasis Web - B</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
						<li><a href="edit-article.php?id=<?= $id ?>>">Edit Artikel</a></li>
						<li><a href="delete.php?id=<?= $id ?>">Hapus Artikel</a></li>
					</ul>
					<ul class="actions stacked">
						<li><a href="http://b.pbw.ilkom.unej.ac.id/182410101001/" class="button primary fit">Other Directory</a></li>
					</ul>
				</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
        <?php if (isset($_GET["id"])): ?>
					<section id="banner" class="style2">
            <input type="hidden" value="<?= $id ?>" name="id"/>
						<div class="inner">
							<span class="image">
								<img src="<?= $data["picture"] ?>" alt="" />
							</span>
							<header class="major">
								<h1><?= $data["title"] ?></h1>
							</header>
							<div class="content">
								<p>Ditulis oleh <?= $data["author"] ?></p>
								<p>Pada <?= $data["created"] ?></p>
								<br>|<br>
								<p>Diperbarui oleh <?= $data["editor"] ?></p>
								<p>Pada <?= $data["edited"] ?></p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<p><?= $data["content"]?> </p>
								</div>
							</section>
            <?php endif; ?>

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
