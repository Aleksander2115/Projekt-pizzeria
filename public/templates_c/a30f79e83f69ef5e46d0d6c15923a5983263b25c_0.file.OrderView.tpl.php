<?php
/* Smarty version 4.1.0, created on 2022-05-30 20:02:04
  from 'F:\STUDIA\XAMPP\htdocs\Pizzeria\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295069c7daad2_90229869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30f79e83f69ef5e46d0d6c15923a5983263b25c' => 
    array (
      0 => 'F:\\STUDIA\\XAMPP\\htdocs\\Pizzeria\\app\\views\\OrderView.tpl',
      1 => 1653933714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295069c7daad2_90229869 (Smarty_Internal_Template $_smarty_tpl) {
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
addToOrder">
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
-<?php echo $_smarty_tpl->tpl_vars['z']->value["Rozmiar"];?>
-<?php echo $_smarty_tpl->tpl_vars['z']->value["Cena"];?>

                            </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
                        </td>
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
-<?php echo $_smarty_tpl->tpl_vars['a']->value["Rodzaj"];?>

                            </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
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
-<?php echo $_smarty_tpl->tpl_vars['a']->value["Rodzaj"];?>

                            </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
                        </td>
                        <td>
                          <ul class="actions">
                            <input type="hidden" name="ID_Zamowienie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ID_Zamowienie;?>
">
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ododatek']->value, 'od');
$_smarty_tpl->tpl_vars['od']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['od']->value) {
$_smarty_tpl->tpl_vars['od']->do_else = false;
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['op']->value["ID_Zamowienie"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['op']->value["Nazwa"];?>
-<?php echo $_smarty_tpl->tpl_vars['op']->value["Rozmiar"];?>
-<?php echo $_smarty_tpl->tpl_vars['op']->value["Cena"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['od']->value["Nazwa"];?>
-<?php echo $_smarty_tpl->tpl_vars['od']->value["Rodzaj"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['o']->value["Cena_dostawy"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['o']->value["Koszt_calkowity"];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['o']->value["Data_zamowienia"];?>
</td>
                      <td>
                        <a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"#"),$_smarty_tpl ) );?>
">Usuń</a>
                      </td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8219928006295069c7d41a6_72397698', 'messages');
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
class Block_8219928006295069c7d41a6_72397698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_8219928006295069c7d41a6_72397698',
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
