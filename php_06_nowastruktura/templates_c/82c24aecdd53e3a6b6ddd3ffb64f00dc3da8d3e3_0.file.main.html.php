<?php
/* Smarty version 3.1.30, created on 2022-11-12 12:16:48
  from "D:\Xamppv1\htdocs\php_06_nowastruktura\app\views\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636f80a0015ea4_07789283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82c24aecdd53e3a6b6ddd3ffb64f00dc3da8d3e3' => 
    array (
      0 => 'D:\\Xamppv1\\htdocs\\php_06_nowastruktura\\app\\views\\templates\\main.html',
      1 => 1668251806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636f80a0015ea4_07789283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/magister.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
	<div class="container">
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				
				<li><a href="#about">Hello</a></li>
				<li><a href="#head" class="active">Formularz kredytowy</a></li>

			
				
			</ul>
		</div>
	</div>
</nav>




<!-- Main (Home) section -->
<section class="section" id="head">

	<div class="container">
	
		<h2 class="text-center title">Kalkulator kredytowy</h2>
		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	
		

					<div id="app_content" class="content">
				
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1564259416636f80a0015134_78628146', 'content');
?>

				
					</div>
				
					<div class="footer l-box is-center">
						<p>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223660991636f80a0015a60_28666065', 'footer');
?>

						</p>	
						  </div>
				
				</div>
		</div>
	</div>


</section>

<!-- Second (Formularz) section -->
<section class="section" id="about">

	<div class="container">

		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	

				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="title">Projekt</h1>
				<h2 class="subtitle">Aplikacje Sieciowe</h2>


			

	
			</div> <!-- /col -->

			
		</div> <!-- /row -->
		<h2 class="subtitle">Mariusz Bibrzycki</h2>
	
	</div>
</section>



<!-- Load js libs only when the page is loaded. -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/modernizr.custom.72241.js"><?php echo '</script'; ?>
>
<!-- Custom template scripts -->
<?php echo '<script'; ?>
 src="assets/js/magister.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_1564259416636f80a0015134_78628146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_223660991636f80a0015a60_28666065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'footer'} */
}
