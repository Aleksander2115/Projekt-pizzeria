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
							<h2>Rejestracja</h2>
						</header>


      <!-- Content -->
            <!-- Form -->
							<section>
								<form method="post" action="{$conf->action_url}registry">
									<div class="row gtr-uniform gtr-50">
                    <div class="col-4 col-12-xsmall">
                      <input type="text" name="Login" id="Login" value="{$form->Login}" placeholder="Login" />
                    </div>
                    <div class="col-4 col-12-xsmall">
                      <input type="password" name="Haslo" id="Haslo" value="{$form->Haslo}" placeholder="Hasło" />
                    </div>
                    <div class="col-4 col-12-xsmall">
                      <input type="password" name="Haslo2" id="Haslo2" value="{$form->Haslo2}" placeholder="Powtórz hasło" />
                    </div>
                    <div class="col-6 col-12-xsmall">
											<input type="text" name="Imie" id="Imie" value="" placeholder="Imię" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="Nazwisko" id="Nazwisko" value="{$form->Nazwisko}" placeholder="Nazwisko" />
										</div>
                    <div class="col-3 col-12-xsmall">
                      <input type="text" name="Kod_pocztowy" id="Kod_pocztowy" value="{$form->Kod_pocztowy}" placeholder="Kod Pocztowy" />
                    </div>
                    <div class="col-9 col-12-xsmall">
                      <input type="text" name="Miejscowosc" id="Miejscowosc" value="{$form->Miejscowosc}" placeholder="Miejscowość" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="Ulica" id="Ulica" value="{$form->Ulica}" placeholder="Ulica" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="Nr_domu" id="Nr_domu" value="{$form->Nr_domu}" placeholder="Numer domu" />
                    </div>
                    <div class="col-12 col-12-xsmall">
                      <input type="text" name="Nr_telefonu" id="Nr_telefonu" value="{$form->Nr_telefonu}" placeholder="Numer telefonu" />
                    </div>
                    <ul class="actions">
                      <input type="hidden" name="ID_Uzytkownik" value="{$form->ID_Uzytkownik}">
                      <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                    </ul>
									</div>
								</form>
							</section>
					</div>
				</div>

        {block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

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
