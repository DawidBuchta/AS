<?php
/* Smarty version 4.2.1, created on 2022-10-29 14:24:04
  from 'C:\xampp\htdocs\AS-main\zad4_szablonowanie\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635d1b6470e320_10295087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '229ad6d404f542daf44092832daec9ef1c8ea31a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS-main\\zad4_szablonowanie\\templates\\main.html',
      1 => 1667046240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635d1b6470e320_10295087 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="assets/css/main.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
                
			<!-- Calculator -->
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_835652394635d1b6470de79_09489455', 'calculator');
?>

			
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
class Block_835652394635d1b6470de79_09489455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calculator' => 
  array (
    0 => 'Block_835652394635d1b6470de79_09489455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                              
                            <?php
}
}
/* {/block 'calculator'} */
}
