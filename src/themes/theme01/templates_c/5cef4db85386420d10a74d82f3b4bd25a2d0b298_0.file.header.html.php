<?php /* Smarty version 3.1.27, created on 2015-10-10 20:45:40
         compiled from "/home/vo/www/test.local/themes/theme01/templates/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:18485068456195cd4945072_09596205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cef4db85386420d10a74d82f3b4bd25a2d0b298' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/header.html',
      1 => 1444502728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18485068456195cd4945072_09596205',
  'variables' => 
  array (
    'title' => 0,
    'login' => 0,
    'mainmenu' => 0,
    'value' => 0,
    'key' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56195cd498cf23_46602454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56195cd498cf23_46602454')) {
function content_56195cd498cf23_46602454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18485068456195cd4945072_09596205';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
				<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>		
						<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - My first site
				<?php }?>
		</title>	
		<link rel = "stylesheet" type = "text/css" href = '/themes/theme01/templates/style.css'>
		<meta charset = "utf8">
	</head>
<body>
<div class="wrap">
  <div class="page">
		<header>
			<div class = "header_content">
				<div class = "header_content_left">
					<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && isset($_smarty_tpl->tpl_vars['mainmenu']->value)) {?>
						<div class = "mainmenu">
							<ul>
								<?php
$_from = $_smarty_tpl->tpl_vars['mainmenu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
									<li><a href = "index.php<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></li>
								<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>					
							</ul>
						</div>
					<?php }?>
				</div>
				<div class = "header_content_right">
					<?php if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
						Привет, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&emsp;&emsp;&emsp;
						<a href = "index.php?action=logout" class = "logoutbtn">Выйти</a>
					<?php }?>
				</div>
			</div>
		</header>
		<div class = "page_content">
		<!-- End of header -->
<?php }
}
?>