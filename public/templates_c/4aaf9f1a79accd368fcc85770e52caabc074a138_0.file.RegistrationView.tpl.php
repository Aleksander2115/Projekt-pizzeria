<?php
/* Smarty version 4.1.0, created on 2022-05-20 10:46:08
  from 'F:\STUDIA\XAMPP\htdocs\Pizzeria\app\views\RegistrationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628755503ec0e2_98509639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aaf9f1a79accd368fcc85770e52caabc074a138' => 
    array (
      0 => 'F:\\STUDIA\\XAMPP\\htdocs\\Pizzeria\\app\\views\\RegistrationView.tpl',
      1 => 1653036358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628755503ec0e2_98509639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
								<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
registry">
									<div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="Login" id="Login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Login;?>
" placeholder="Login" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="Haslo" id="Haslo" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Haslo;?>
" placeholder="Hasło" />
                    </div>
                    <div class="col-6 col-12-xsmall">
											<input type="text" name="Imie" id="Imie" value="" placeholder="Imię" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="text" name="Nazwisko" id="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Nazwisko;?>
" placeholder="Nazwisko" />
										</div>
                    <div class="col-3 col-12-xsmall">
                      <input type="text" name="Kod_pocztowy" id="Kod_pocztowy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Kod_pocztowy;?>
" placeholder="Kod Pocztowy" />
                    </div>
                    <div class="col-9 col-12-xsmall">
                      <input type="text" name="Miejscowosc" id="Miejscowosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Miejscowosc;?>
" placeholder="Miejscowość" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="Ulica" id="Ulica" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Ulica;?>
" placeholder="Ulica" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                      <input type="text" name="Nr_domu" id="Nr_domu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Nr_domu;?>
" placeholder="Numer domu" />
                    </div>
                    <div class="col-12 col-12-xsmall">
                      <input type="text" name="Nr_telefonu" id="Nr_telefonu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Nr_telefonu;?>
" placeholder="Numer telefonu" />
                    </div>
                    <ul class="actions">
                      <input type="hidden" name="Id_uzytkownik" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Id_uzytkownik;?>
">
                      <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                    </ul>
									</div>
								</form>
							</section>
					</div>
				</div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69365254762875550385382_11367923', 'messages');
?>


			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

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
/* {block 'messages'} */
class Block_69365254762875550385382_11367923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_69365254762875550385382_11367923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
}
