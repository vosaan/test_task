<?php /* Smarty version 3.1.27, created on 2015-10-10 18:19:51
         compiled from "/home/vo/www/test.local/themes/theme01/templates/readfeed.html" */ ?>
<?php
/*%%SmartyHeaderCode:2949521956193aa745b015_86861768%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f98be2e7eea57ca29bdcad3e1aa68d5edb4d12' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/readfeed.html',
      1 => 1444493875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2949521956193aa745b015_86861768',
  'variables' => 
  array (
    'login' => 0,
    'feed' => 0,
    'rec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56193aa74a21e6_40692996',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56193aa74a21e6_40692996')) {
function content_56193aa74a21e6_40692996 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2949521956193aa745b015_86861768';
if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['feed']->value)) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['feed']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rec']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
$foreach_rec_Sav = $_smarty_tpl->tpl_vars['rec'];
?>
			<div class="feed_element">
                <h3><?php echo $_smarty_tpl->tpl_vars['rec']->value['title'];?>
</h3>
    			<p><?php echo $_smarty_tpl->tpl_vars['rec']->value['message'];?>
</p>
    			<table>
                    <tr class="feed_user_date">
                        <td><em>Пользователь <?php echo $_smarty_tpl->tpl_vars['rec']->value['login'];?>
 (<?php echo $_smarty_tpl->tpl_vars['rec']->value['email'];?>
) оставил отзыв </em></td>
                        <td><em><?php echo $_smarty_tpl->tpl_vars['rec']->value['datetime'];?>
</em></td>
                    </tr>
                </table>
			</div>
		<?php
$_smarty_tpl->tpl_vars['rec'] = $foreach_rec_Sav;
}
?>
    <?php }?>    
<?php }?>        



<?php }
}
?>