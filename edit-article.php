<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getjson = file_get_contents('article.json');
    $data = json_decode($getjson, true);
    $data = $data["article"];
    $data = $data[$id];
}
?>
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
                          <?php if (isset($_GET["id"])): ?>
                  		        <form method="POST" action="update.php">
                                <input type="hidden" value="<?php echo $id ?>" name="id"/>
  														<div class="row gtr-uniform">
  															<div class="col-12">
  																<input type="text" name="title" id="title" placeholder="Judul Artikel" required="require" value="<?= $data["title"] ?>"/>
  															</div>
                                <div class="col-6 col-12-xsmall">
  																<label for="author">Penulis</label>
                                  <input type="text" name="author" id="author" value="<?=$data["author"]?>" disabled/>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                  <label for="editor">Penyunting</label>
                                  <input name="editor" type="text" id="editor" placeholder="Nama Editor" required="require"/>
                                </div>
  															<div class="col-12">
                                  <label for="picture">Link Gambar</label>
                                  <input type="text" name="picture" id="picture" value="<?= $data["picture"]?>" placeholder="Upload gambar lalu taruh linknya di sini">
                                </div>
  															<div class="col-12">
                                  <label for="content">Tulis Di sini</label>
                                  <textarea rows="6" name="content" id="content" required='require'><?= $data["content"]?></textarea>
  															</div>
                                <input type="text" name="created" id="created" value="<?= $data["created"]?>" style="display:none"/>
                                <input name="edited" type="text" id="edited" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('j F Y'); ?>" style="display:none"/>
  															<!-- Break -->
  															<div class="col-12">
  																<ul class="actions">
  																	<li><input type="submit" value="Perbarui Artikel" class="primary" /></li>
  																	<li><input type="reset" value="Reset Form" /></li>
  																</ul>
  															</div>
  														</div>
                            </form>
                          <?php endif; ?>
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
      <script src="ckeditor/ckeditor.js"></script>
			<script>CKEDITOR.replace('content')</script>
	</body>
</html>
