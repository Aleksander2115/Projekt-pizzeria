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
					<h1 id="logo"><a href="Main_pageView.tpl"><u>Strona główna</u></a>
					<span>
						{if \core\RoleUtils::inRole('Admin')}
							, czołem Adminie!
						{else if \core\RoleUtils::inRole('Mod')}
							, czołem Moderatorze
						{else if \core\RoleUtils::inRole('User')}
							, witaj
						{/if}
					</h1>
					</span>
					<nav id="nav">
						<ul>
							<li>
								<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>
							</li>
							{if count($conf->roles)>0}
								<li><a href="{url action="logout"}" class="button">Wyloguj</a></li>
							{else}
								<li><a href="{url action="showLogin"}" class="button">Zaloguj</a></li>
								<li><a href="{url action="NewRegistration"}" class="button primary">Zarejestruj się</a></li>
							{/if}
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Pizzeria Najlepsza</h2>
							<p>Najlepsza pizzeria w mieście.<br />
							Życzymy smacznego!</p>
						</header>
						<span class="image"><img src="images/g1.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/g1.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>MENU</h2>
										<p>Poniżej znajdują się wszystkie dostępne rodzaje pizzy jakie oferujemy.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Każdą pizzę przygotowujemy ze szczególną starannością i zaangażowaniem.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Składniki jakie występują na naszych pizzach są najwyższej jakości.
										 Identycznie jak ciasto, które przygotowuje pizzerman prosto z Włoch.
										 </p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/g2.jpeg" alt="" /></span>
					<div class="content">
						<header>
							<h2>1. Margherita</h2>
							<p>Pizza Margherita to typowa pizza neapolitańska, którą szykuje się głównie z pomidorów San Marzano,
								 miękkiego sera mozzarella, świeżych listków bazylii, odrobiny soli i oliwy z oliwek z pierwszego tłoczenia.</p>
						</header>
						<ul class="actions">
							<li><a href="#" class="button">Dodaj do zamówienia</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/g3.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>2. Capriciosa</h2>
							<p>Jest ona jedną z najpopularniejszych pizz.
								 Składniki na włoską Capriciosa to sos pomidorowy, szynka i grzyby (tutaj pieczarki).</p>
						</header>
						<ul class="actions">
							<li><a href="#" class="button">Dodaj do zamówienia</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>


				<!-- Four -->
					<section id="four" class="spotlight style4 right">
						<span class="image fit main bottom"><img src="images/g4.jpg" alt="" /></span>
						<div class="content">
							<header>
								<h2>3. Włoska</h2>
								<p>Na tej pizzy znajdziemy wyjątkowo włoskie składniki takie jak pieczarki, oliwki czy szynkę parmeńską a to wszystko okraszone
									 liśćmi bazylii.</p>
							</header>
							<ul class="actions">
								<li><a href="#" class="button">Dodaj do zamówienia</a></li>
							</ul>
						</div>
						<a href="#five" class="goto-next scrolly">Next</a>
					</section>


					<!-- Five -->
						<section id="five" class="spotlight style5 left">
							<span class="image fit main bottom"><img src="images/g5.jpeg" alt="" /></span>
							<div class="content">
								<header>
									<h2>4. Hawajska</h2>
									<p>Pizza Hawajska to popularna pizza charakteryzująca się tradycyjnym drożdżowym ciastem,
										sosem pomidorowym i dodatkiem szynki oraz ananasa.</p>
								</header>
								<ul class="actions">
									<li><a href="#" class="button">Dodaj do zamówienia</a></li>
								</ul>
							</div>
							<a href="#five" class="goto-next scrolly">Next</a>
						</section>


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
