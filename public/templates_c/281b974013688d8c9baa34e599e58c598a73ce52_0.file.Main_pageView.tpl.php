<?php
/* Smarty version 4.1.0, created on 2022-05-30 21:08:50
  from 'F:\STUDIA\XAMPP\htdocs\Pizzeria\app\views\Main_pageView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62951642216cb4_18085893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281b974013688d8c9baa34e599e58c598a73ce52' => 
    array (
      0 => 'F:\\STUDIA\\XAMPP\\htdocs\\Pizzeria\\app\\views\\Main_pageView.tpl',
      1 => 1653937656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62951642216cb4_18085893 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
						<?php if (\core\RoleUtils::inRole('Admin')) {?>
							, czołem Adminie!
						<?php } elseif (\core\RoleUtils::inRole('Mod')) {?>
							, czołem Moderatorze
						<?php } elseif (\core\RoleUtils::inRole('User')) {?>
							, witaj
						<?php }?>
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
							<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showOrders"),$_smarty_tpl ) );?>
" class="button">Twoje zamówienia</a></li>
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="button primary">Wyloguj</a></li>
							<?php } else { ?>
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showLogin"),$_smarty_tpl ) );?>
" class="button">Zaloguj</a></li>
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"NewRegistration"),$_smarty_tpl ) );?>
" class="button primary">Zarejestruj się</a></li>
							<?php }?>
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
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToOrder">
					<span class="image fit main"><img src="images/g2.jpeg" alt="" /></span>
					<div class="content">
						<header>
							<h2>1. Margherita</h2>
							<p>Pizza Margherita to typowa pizza neapolitańska, którą szykuje się głównie z pomidorów San Marzano,
								 miękkiego sera mozzarella, świeżych listków bazylii, odrobiny soli i oliwy z oliwek z pierwszego tłoczenia.</p>
						</header>
						<ul class="actions">
							<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showOrders"),$_smarty_tpl ) );?>
" class="button">Przejdź do zamówienia</a></li>
							<?php } else { ?>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showLogin"),$_smarty_tpl ) );?>
" class="button">Dodaj do zamówienia</a></li>
							<?php }?>
						</ul>
					</div>
						<a href="#three" class="goto-next scrolly">Next</a>
					</form>
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
							<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showOrders"),$_smarty_tpl ) );?>
" class="button">Przejdź do zamówienia</a></li>
							<?php } else { ?>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showLogin"),$_smarty_tpl ) );?>
" class="button">Dodaj do zamówienia</a></li>
							<?php }?>
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
								<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showOrders"),$_smarty_tpl ) );?>
" class="button">Przejdź do zamówienia</a></li>
								<?php } else { ?>
								<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showLogin"),$_smarty_tpl ) );?>
" class="button">Dodaj do zamówienia</a></li>
								<?php }?>
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
									<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showOrders"),$_smarty_tpl ) );?>
" class="button">Przejdź do zamówienia</a></li>
									<?php } else { ?>
									<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"showLogin"),$_smarty_tpl ) );?>
" class="button">Dodaj do zamówienia</a></li>
									<?php }?>
								</ul>
							</div>
							<a href="#five" class="goto-next scrolly">Next</a>
						</section>
		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
}
