<?php
/* Smarty version 4.2.1, created on 2022-10-29 17:55:56
  from 'C:\xampp\htdocs\AS-main\zad4_szablonowanie\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635d4d0c8587d9_20884003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a9ef81bbf7fbcf060a8e7e8f0f6ff559d561c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS-main\\zad4_szablonowanie\\app\\calc.tpl',
      1 => 1667058955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635d4d0c8587d9_20884003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<!-- Calculator -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150824638635d4d0c84aef0_13959864', 'calculator');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'calculator'} */
class Block_150824638635d4d0c84aef0_13959864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calculator' => 
  array (
    0 => 'Block_150824638635d4d0c84aef0_13959864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

<h2 class="content-head is-center">Prosty kalkulator</h2>


	<!-- Contact -->
							<article id="contact">
								<h2 class="major">Kalkulator kredytowy</h2>
								<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">
									<div class="fields">
										<div class="field third">
											<label for="Kwota">Kwota w tysiacach </label>
											<input type="text" name="x" id="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
" />
										</div>
										<div class="field third">
											<label for="lat">Ile lat?</label>
											<input type="text" name="y" id="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
" />
										</div>
										<div class="field third">
											<label for="procent">Ile procent?</label>
											<input type="text" name="z" id="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
" ></input>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										
									</ul>
								</form>
								
							</article>

<div class="komunikat">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Rata miesieczna</h4>
	<p class="res">
	<?php echo round($_smarty_tpl->tpl_vars['result']->value,"2");?>
 pln
	</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['summary']->value))) {?>
	<h4>Łącznie</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['summary']->value;?>
 pln
	</p>
<?php }
if ((isset($_smarty_tpl->tpl_vars['odsetki']->value))) {?>
	<h4>Odsetki</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['odsetki']->value;?>
 pln
	</p>
<?php }?>

</div>



    
    
</article>
<?php
}
}
/* {/block 'calculator'} */
}
