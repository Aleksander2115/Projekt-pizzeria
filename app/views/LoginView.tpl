<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>Pizzeria Najlepsza</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="Main_page.html">Strona główna</a></h1>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Logowanie</h2>
						</header>


      <!-- Content -->
            <!-- Form -->
							<section>
								<form method="post" action="{$conf->action_url}login">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="imie" id="id_imie" value="" placeholder="Imię" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="nazwisko" id="id_nazwisko" value="" placeholder="Nazwisko" />
										</div>
                    <div class="col-3 col-12-xsmall">
                      <input type="text" name="kod_pocztowy" id="id_kod_pocztowy" value="" placeholder="Kod Pocztowy" />
                    </div>
                    <div class="col-9 col-12-xsmall">
                      <input type="text" name="miejscowosc" id="id_miejscowosc" value="" placeholder="Miejscowość" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="ulica" id="id_ulica" value="" placeholder="Ulica" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="nr_domu" id="id_nr_domu" value="" placeholder="Numer domu" />
                    </div>
                    <ul class="actions">
                      <li><a href="#" class="button primary">Zaloguj</a></li>
                    </ul>
									</div>
								</form>
							</section>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
