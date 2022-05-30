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
					</span>
					<nav id="nav">
						<ul>
							<li><a href="{url action="logout"}" class="button">Wyloguj</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Kompletowanie zamówienia</h2>
						</header>


      <!-- Content -->
            <!-- Form -->
							<section>
                <form method="post" action="{$conf->action_url}addToOrder">
                <div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Pizza-Rozmiar-Cena</th>
												<th>Dodatki</th>
                        <th>Opcje</th>
											</tr>
										</thead>
										<tbody>
                    	<tr>
                        <td>
                          <select name="ID_Pizza" id="ID_Pizza">
                            <option value="">- Pizza -</option>
                            {foreach $pizza as $z}
                            <option value="{$z["ID_Pizza"]}" name="{$z["ID_Pizza"]}">
                            {$z["ID_Pizza"]}-{$z["Nazwa"]}-{$z["Rozmiar"]}-{$z["Cena"]}
                            </option>
                            {/foreach}
                          </select>
                        </td>
                        <td>
                          <select name="ID_Dodatek" id="ID_Dodatek">
                            <option value="">- Dodatek -</option>
                            {foreach $dodatek as $a}
                            <option value="{$a["ID_Dodatek"]}" name="{$a["ID_Dodatek"]}">
                            {$a["Nazwa"]}-{$a["Rodzaj"]}
                            </option>
                            {/foreach}
                          </select>
                          <select name="ID_Dodatek" id="ID_Dodatek">
                            <option value="">- Dodatek -</option>
                            {foreach $dodatek as $a}
                            <option value="{$a["ID_Dodatek"]}" name="{$a["ID_Dodatek"]}">
                            {$a["Nazwa"]}-{$a["Rodzaj"]}
                            </option>
                            {/foreach}
                          </select>
                        </td>
                        <td>
                          <ul class="actions">
                            <input type="hidden" name="ID_Zamowienie" value="{$form->ID_Zamowienie}">
                            <li><input type="submit" value="Dodaj do zamówienia" class="primary small" /></li>
                          </ul>
                        </td>
                    	</tr>
										</tbody>
                  </table>
										<tfoot>
										</tfoot>
								</div>
              </form>
							</section>
            <header class="major">
              <h2>Twoje zamówienia</h2>
            </header>
            <section>
              <div class="table-wrapper">
                <table class="alt">
                  <thead>
                    <tr>
                      <th>Numer zamówienia</th>
                      <th>Pizza-Rozmiar-Cena</th>
                      <th>Dodatki</th>
                      <th>Cena dostawy</th>
                      <th>Koszt całkowity</th>
                      <th>Data zamówienia</th>
                      <th>Opcje</th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach $orders as $o}
                    {foreach $opizza as $op}
                    {foreach $ododatek as $od}
                    <tr>
                      <td>{$op["ID_Zamowienie"]}</td>
                      <td>{$op["Nazwa"]}-{$op["Rozmiar"]}-{$op["Cena"]}</td>
                      <td>{$od["Nazwa"]}-{$od["Rodzaj"]}</td>
                      <td>{$o["Cena_dostawy"]}</td>
                      <td>{$o["Koszt_calkowity"]}</td>
                      <td>{$o["Data_zamowienia"]}</td>
                      <td>
                        <a class="button primary small" href="{url action="#"}">Usuń</a>
                      </td>
                    </tr>
                    {/foreach}
                    {/foreach}
                    {/foreach}
                  </tbody>
                </table>
                  <tfoot>
                  </tfoot>
              </div>
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
