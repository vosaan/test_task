<?php /* Smarty version 3.1.27, created on 2015-10-10 18:11:26
         compiled from "/home/vo/www/test.local/themes/theme01/templates/weather.html" */ ?>
<?php
/*%%SmartyHeaderCode:620076312561938aeea0db2_14378486%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40d80b25984a820bb41937f490a0c9e2c745703' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/weather.html',
      1 => 1444332472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '620076312561938aeea0db2_14378486',
  'variables' => 
  array (
    'login' => 0,
    'today_date' => 0,
    'arr_today' => 0,
    'rec' => 0,
    'day' => 0,
    'tomorrow_date' => 0,
    'arr_tomorrow' => 0,
    'after_tomorrow_date' => 0,
    'arr_after_tomorrow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561938aef3abe7_73671199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561938aef3abe7_73671199')) {
function content_561938aef3abe7_73671199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '620076312561938aeea0db2_14378486';
if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
	<table border=1>
	<tr>
		<th>Время суток</th>
		<th>Облачность</th>
		<th>Температура воздуха, &deg;С</th>
		<th>Атмосферное давление, мм.р.с.</th>
		<th>Направление / скорость ветра, м./с.</th>
		<th>Относительная влажность, %</th>
		<th>Ощущается как, &deg;С</th>
	</tr>
	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['today_date']->value)) {?>
		<td colspan=7><h2><?php echo $_smarty_tpl->tpl_vars['today_date']->value;?>
</h2></td>
		<?php }?>
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['arr_today']->value)) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['arr_today']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rec']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
$foreach_rec_Sav = $_smarty_tpl->tpl_vars['rec'];
?>
		<tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['rec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$foreach_day_Sav = $_smarty_tpl->tpl_vars['day'];
?>
				<td><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
			<?php
$_smarty_tpl->tpl_vars['day'] = $foreach_day_Sav;
}
?>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['rec'] = $foreach_rec_Sav;
}
?>
	<?php }?>
	
	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['tomorrow_date']->value)) {?>
		<td colspan=7><h2><?php echo $_smarty_tpl->tpl_vars['tomorrow_date']->value;?>
</h2></td>
		<?php }?>
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['arr_tomorrow']->value)) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['arr_tomorrow']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rec']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
$foreach_rec_Sav = $_smarty_tpl->tpl_vars['rec'];
?>
		<tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['rec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$foreach_day_Sav = $_smarty_tpl->tpl_vars['day'];
?>
				<td><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
			<?php
$_smarty_tpl->tpl_vars['day'] = $foreach_day_Sav;
}
?>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['rec'] = $foreach_rec_Sav;
}
?>
	<?php }?>

	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['after_tomorrow_date']->value)) {?>
		<td colspan=7><h2><?php echo $_smarty_tpl->tpl_vars['after_tomorrow_date']->value;?>
</h2></td>
		<?php }?>
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['arr_after_tomorrow']->value)) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['arr_after_tomorrow']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rec']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
$foreach_rec_Sav = $_smarty_tpl->tpl_vars['rec'];
?>
		<tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['rec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['day']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
$foreach_day_Sav = $_smarty_tpl->tpl_vars['day'];
?>
				<td><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</td>
			<?php
$_smarty_tpl->tpl_vars['day'] = $foreach_day_Sav;
}
?>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['rec'] = $foreach_rec_Sav;
}
?>
	<?php }?>
	
	</table>
<?php }
}
}
?>