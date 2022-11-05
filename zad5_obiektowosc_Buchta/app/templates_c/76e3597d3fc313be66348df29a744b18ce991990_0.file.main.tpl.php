<?php
/* Smarty version 4.2.1, created on 2022-11-04 23:03:42
  from 'C:\xampp\htdocs\AS-main\zad5_obiektowosc_Buchta\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63658c3ee47952_32846482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e3597d3fc313be66348df29a744b18ce991990' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS-main\\zad5_obiektowosc_Buchta\\templates\\main.tpl',
      1 => 1667599421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63658c3ee47952_32846482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dimension by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
                                            
                                          
						<div class="logo">
							<span class="fa fa-calculator" ></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator Kredytowy</h1>
								<p> Kredyt bankowy – kwota pieniędzy dostarczonych przez bank na określony czas i na określonych warunkach, 
                                                                    technologia zaspokajająca potrzeby finansowe zadeklarowane przez pożyczkobiorcę. 
                                                                    Umowa zawarta w formie pisemnej między bankiem a kredytobiorcą. </p>
							</div>
						</div>
						<nav>
							<ul>
								
								<li><a href="#contact">Oblicz Rate</a></li>
								
							</ul>
						</nav>
                                         
					</header>

				<!-- Main -->
					<div id="main">

			
					<!-- Contact -->
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30997979863658c3ee47271_09468456', 'calculator');
?>


						
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Autor: Dawid Buchta Szablon: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
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
/* {block 'calculator'} */
class Block_30997979863658c3ee47271_09468456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calculator' => 
  array (
    0 => 'Block_30997979863658c3ee47271_09468456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'calculator'} */
}
