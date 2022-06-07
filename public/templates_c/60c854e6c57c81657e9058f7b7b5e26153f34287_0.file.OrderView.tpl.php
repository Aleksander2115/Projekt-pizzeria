<?php
/* Smarty version 4.1.0, created on 2022-06-07 12:27:13
  from 'C:\xampp\htdocs\Pizzeria\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629f2801c3fe14_05092209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60c854e6c57c81657e9058f7b7b5e26153f34287' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Pizzeria\\app\\views\\OrderView.tpl',
      1 => 1654597628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f2801c3fe14_05092209 (Smarty_Internal_Template $_smarty_tpl) {
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
						<header class="major">
							<h2>Kompletowanie zamówienia</h2>
						</header>


      <!-- Content -->
            <!-- Form -->
							<section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addPizza">
                <div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Pizza-Rozmiar-Cena</th>
												<th>Dodatki</th>
											</tr>
										</thead>
										<tbody>
                    	<tr>
                        <td>
                          <select name="ID_Pizza" id="ID_Pizza">
                            <option value="">- Pizza -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pizza']->value, 'z');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['z']->value["ID_Pizza"];?>
" name="<?php echo $_smarty_tpl->tpl_vars['z']->value["ID_Pizza"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['z']->value["ID_Pizza"];?>
-<?php echo $_smarty_tpl->tpl_vars['z']->value["Nazwa"];?>
-<?php echo $_smarty_tpl->tpl_vars['z']->value["Cena"];?>

                            </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
                          <ul class="actions">
                            <li><input type="submit" value="Dodaj do zamówienia" class="primary small" /></li>
                          </ul>
                        </td>
                      </form>
                      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addAddition">
                        <td>
                          <select name="ID_Dodatek" id="ID_Dodatek">
                            <option value="">- Dodatek -</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dodatek']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value["ID_Dodatek"];?>
" name="<?php echo $_smarty_tpl->tpl_vars['a']->value["ID_Dodatek"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['a']->value["Nazwa"];?>

                            </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
                          <ul class="actions">
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
              <h2>Koszyk</h2>
            </header>
            <section>
              <div class="table-wrapper">
                <table class="alt">
                  <thead>
                    <tr>
                      <th>Numer zamówienia</th>
                      <th>Pizza-Cena</th>
                      <th>Cena dostawy</th>
                      <th>Koszt całkowity</th>
                      <th>Data zamówienia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opizza']->value, 'op');
$_smarty_tpl->tpl_vars['op']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['o']->value["ID_Zamowienie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["Nazwa"];?>
-<?php echo $_smarty_tpl->tpl_vars['op']->value["Cena"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Cena_dostawy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Koszt_calkowity"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["Data_zamowienia"];?>
</td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"deletePizza"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['o']->value['ID_Zamowienie'];?>
">Usuń</a>
                    <a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"buyPizza"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['o']->value['ID_Zamowienie'];?>
">Kup</a>
                  </tbody>
                </table>
                  <tfoot>
                  </tfoot>
              </div>
              <div class="table-wrapper">
                <table class="alt">
                  <thead>
                    <tr>
                      <th>Numer zamówienia</th>
                      <th>Dodatek</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ododatek']->value, 'ad');
$_smarty_tpl->tpl_vars['ad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['o']->value["ID_Zamowienie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ad']->value["Nazwa"];?>
</td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"deleteAddition"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['o']->value['ID_Zamowienie'];?>
">Usuń</a>
                  </tbody>
                </table>
                  <tfoot>
                  </tfoot>
              </div>
            </section>
					</div>
				</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124967327629f2801c39839_83440500', 'messages');
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
class Block_124967327629f2801c39839_83440500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_124967327629f2801c39839_83440500',
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
