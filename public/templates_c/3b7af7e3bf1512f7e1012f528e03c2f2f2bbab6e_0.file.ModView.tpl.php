<?php
/* Smarty version 4.1.0, created on 2022-06-07 11:48:01
  from 'C:\xampp\htdocs\Pizzeria\app\views\ModView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629f1ed1e1e200_75856174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b7af7e3bf1512f7e1012f528e03c2f2f2bbab6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Pizzeria\\app\\views\\ModView.tpl',
      1 => 1654595260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f1ed1e1e200_75856174 (Smarty_Internal_Template $_smarty_tpl) {
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
					</span>
					<nav id="nav">
						<ul>
							<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="button">Wyloguj</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
      <!-- Content -->
            <!-- Form -->
            <header class="major">
              <h2>Lista zamówień</h2>
            </header>
            <section>
              <div class="table-wrapper">
                <table class="alt">
                  <thead>
                    <tr>
                      <th>Numer zamówienia</th>
                      <th>ID użytkownika</th>
					  <th>Imię</th>
					  <th>Nazwisko</th>
					  <th>Nr_telefonu</th>
					  <th>Miejscowosc</th>
					  <th>Kod_pocztowy</th>
					  <th>Ulica</th>
					  <th>Nr_domu</th>
                      <th>Data zamówienia</th>
                      <th>Opcje</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wholeOrder']->value, 'wo');
$_smarty_tpl->tpl_vars['wo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wo']->value) {
$_smarty_tpl->tpl_vars['wo']->do_else = false;
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users_orders']->value, 'uo');
$_smarty_tpl->tpl_vars['uo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['uo']->value) {
$_smarty_tpl->tpl_vars['uo']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['wo']->value["ID_Zamowienie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wo']->value["ID_Uzytkownik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Nr_telefonu"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Miejscowosc"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Kod_pocztowy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Ulica"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['uo']->value["Nr_domu"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['wo']->value["Data_zamowienia"];?>
</td><td><a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"deleteOrderMod"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['wo']->value['ID_Zamowienie'];?>
">Usuń</a></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
                  <tfoot>
                  </tfoot>
              </div>
            </section>
					</div>
				</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239937645629f1ed1e18351_13115540', 'messages');
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
class Block_239937645629f1ed1e18351_13115540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_239937645629f1ed1e18351_13115540',
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
