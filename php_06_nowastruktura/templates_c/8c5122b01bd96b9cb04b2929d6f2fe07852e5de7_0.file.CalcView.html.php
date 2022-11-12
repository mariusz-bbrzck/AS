<?php
/* Smarty version 3.1.30, created on 2022-11-12 12:02:57
  from "D:\Xamppv1\htdocs\php_06_nowastruktura\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636f7d61e89b03_77324423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5122b01bd96b9cb04b2929d6f2fe07852e5de7' => 
    array (
      0 => 'D:\\Xamppv1\\htdocs\\php_06_nowastruktura\\app\\views\\CalcView.html',
      1 => 1668250975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
  ),
),false)) {
function content_636f7d61e89b03_77324423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1771394949636f7d61e799e1_76470294', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1046595044636f7d61e895b7_49250719', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_1771394949636f7d61e799e1_76470294 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1046595044636f7d61e895b7_49250719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
			<fieldset>

			<label for="x">Kwota</label>
			<input id="x" type="text" placeholder="wprowadz kwote" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">

			<label for="op">Oprocentowanie</label>
			<input id="op" type="text" placeholder="wprowadz %" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
		
			<label for="y">Lata</label>
			<input id="y" type="text" placeholder="wprowadz lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>



<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
