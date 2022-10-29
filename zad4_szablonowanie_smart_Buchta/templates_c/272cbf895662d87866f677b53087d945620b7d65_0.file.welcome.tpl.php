<?php
/* Smarty version 4.2.1, created on 2022-10-29 13:53:53
  from 'C:\xampp\htdocs\AS-main\zad4_szablonowanie\app\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635d14517d1b59_36440737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '272cbf895662d87866f677b53087d945620b7d65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS-main\\zad4_szablonowanie\\app\\welcome.tpl',
      1 => 1667044427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635d14517d1b59_36440737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1644825137635d14517d14e5_64828716', 'welcome');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'welcome'} */
class Block_1644825137635d14517d14e5_64828716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'welcome' => 
  array (
    0 => 'Block_1644825137635d14517d14e5_64828716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
                
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="fa fa-calculator" style="font-size:36px ; padding-top: 25px; padding-left: 4px" ></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator Raty Kredytu</h1>
								<p>Kredyt bankowy – kwota pieniędzy dostarczonych przez bank na określony czas i na określonych warunkach,
                                                                    technologia zaspokajająca potrzeby finansowe zadeklarowane przez pożyczkobiorcę.
                                                                    Umowa zawarta w formie pisemnej między bankiem a kredytobiorcą.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href='app/welcome.tpl'>Oblicz rate</a></li>
			
							</ul>
						</nav>
					</header>





<?php
}
}
/* {/block 'welcome'} */
}
