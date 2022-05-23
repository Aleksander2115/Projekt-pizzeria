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
							<h2>Panel administatora</h2>
						</header>


      <!-- Content -->
            <!-- Form -->
							<section>
                <div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>ID Roli</th>
												<th>ID Użytkownika</th>
												<th>Opcje / Zmień na</th>
											</tr>
										</thead>
										<tbody>
                    {foreach $people as $p}
                    {strip}
                    	<tr>
                    		<td>{$p["ID_Rola"]}</td>
                    		<td>{$p["ID_Uzytkownik"]}</td>
                        <td>
                          <a class="button primary small" href="{url action="adminDelete"}/{$p['ID_Uzytkownik']}">Usuń</a>
                          <a class="button primary small" href="{url action="adminChangeToAdmin"}/{$p['ID_Uzytkownik']}">Admin</a>
                          <a class="button primary small" href="{url action="adminChangeToMod"}/{$p['ID_Uzytkownik']}">Mod</a>
                          <a class="button primary small" href="{url action="adminChangeToUser"}/{$p['ID_Uzytkownik']}">User</a>
                        </td>
                    	</tr>
                    {/strip}
                    {/foreach}
										</tbody>
										<tfoot>
										</tfoot>
									</table>
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
