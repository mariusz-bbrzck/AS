<?php
/* Smarty version 3.1.30, created on 2022-11-12 11:31:32
  from "D:\Xamppv1\htdocs\php_06_kontroler_glowny\app\calc\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636f7604a160e4_81090308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c85030c2f1118afa71d241332a73f16a3d5b49a' => 
    array (
      0 => 'D:\\Xamppv1\\htdocs\\php_06_kontroler_glowny\\app\\calc\\CalcView.html',
      1 => 1668249064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636f7604a160e4_81090308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71258797636f7604a05152_36162863', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1516383265636f7604a15bd5_68847870', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_71258797636f7604a05152_36162863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1516383265636f7604a15bd5_68847870 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
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
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


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