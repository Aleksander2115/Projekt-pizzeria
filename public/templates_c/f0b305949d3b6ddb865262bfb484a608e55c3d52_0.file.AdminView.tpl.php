<?php
/* Smarty version 4.1.0, created on 2022-06-07 10:09:02
  from 'C:\xampp\htdocs\Pizzeria\app\views\AdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629f079e016a92_53805773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b305949d3b6ddb865262bfb484a608e55c3d52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Pizzeria\\app\\views\\AdminView.tpl',
      1 => 1654588700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f079e016a92_53805773 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["ID_Rola"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["ID_Uzytkownik"];?>
</td><td><a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"adminDelete"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['ID_Uzytkownik'];?>
">Usuń</a><a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"adminChangeToAdmin"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['ID_Uzytkownik'];?>
">Admin</a><a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"adminChangeToMod"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['ID_Uzytkownik'];?>
">Mod</a><a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"adminChangeToUser"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['ID_Uzytkownik'];?>
">User</a></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
                  </table>
										<tfoot>
										</tfoot>
								</div>
							</section>

              <!-- Lista użytkowników bez roli dla admina -->

              <header class="major">
                <h2>Lista użytkowników do przypisania</h2>
              </header>
              <section>
                <div class="table-wrapper">
                  <table class="alt">
                    <thead>
                      <tr>
                        <th>ID Użytkownika</th>
                        <th>Login</th>
                        <th>Opcje</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_userList']->value, 'aul');
$_smarty_tpl->tpl_vars['aul']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aul']->value) {
$_smarty_tpl->tpl_vars['aul']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['aul']->value["ID_Uzytkownik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['aul']->value["Login"];?>
</td><td><a class="button primary small" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"adminAdd"),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['aul']->value['ID_Uzytkownik'];?>
">Dodaj</a></td></tr>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1432204466629f079e0114f5_18649412', 'messages');
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
class Block_1432204466629f079e0114f5_18649412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1432204466629f079e0114f5_18649412',
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
