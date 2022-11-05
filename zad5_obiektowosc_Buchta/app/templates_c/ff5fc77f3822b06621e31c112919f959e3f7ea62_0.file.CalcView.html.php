<?php
/* Smarty version 4.2.1, created on 2022-11-04 23:15:41
  from 'C:\xampp\htdocs\AS-main\zad5_obiektowosc_Buchta\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63658f0dabb322_96463304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5fc77f3822b06621e31c112919f959e3f7ea62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AS-main\\zad5_obiektowosc_Buchta\\app\\CalcView.html',
      1 => 1667600138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63658f0dabb322_96463304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<!-- Calculator -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169517929463658f0daac346_35493507', 'calculator');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'calculator'} */
class Block_169517929463658f0daac346_35493507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calculator' => 
  array (
    0 => 'Block_169517929463658f0daac346_35493507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

<h2 class="content-head is-center">Prosty kalkulator</h2>


	<!-- Contact -->
							<article id="contact">
								<h2 class="major">Kalkulator kredytowy</h2>
                                                                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
app/calc.php">
									<div class="fields">
										<div class="field third">
											<label for="Kwota">Kwota w tysiacach </label>
                                                                                        <input type="text" name="x" id="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
										</div>
										<div class="field third">
											<label for="lat">Ile lat?</label>
											<input type="text" name="y" id="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" />
										</div>
										<div class="field third">
											<label for="procent">Ile procent?</label>
											<input type="text" name="z" id="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
" ></input>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										
									</ul>
								</form>
								
							</article>

<div class="komunikat">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Rata miesieczna</h4>
	<p class="res">
        <?php echo round($_smarty_tpl->tpl_vars['res']->value->result,"2");?>
 PLN
        </p>

<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->summary))) {?>
	<h4>Wynik</h4>
	<p class="res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->summary;?>
 PLN
	</p>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->odsetki))) {?>
	<h4>Wynik</h4>
	<p class="res">
        <?php echo $_smarty_tpl->tpl_vars['res']->value->odsetki;?>
 PLN
	</p>
<?php }?>


</div>



    
   
<?php
}
}
/* {/block 'calculator'} */
}
