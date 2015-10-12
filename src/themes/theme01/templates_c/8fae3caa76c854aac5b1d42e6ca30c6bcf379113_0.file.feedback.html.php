<?php /* Smarty version 3.1.27, created on 2015-10-12 13:54:19
         compiled from "/home/vo/www/test.local/themes/theme01/templates/feedback.html" */ ?>
<?php
/*%%SmartyHeaderCode:199104341561b9f6beb8c60_33747637%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fae3caa76c854aac5b1d42e6ca30c6bcf379113' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/feedback.html',
      1 => 1444650655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199104341561b9f6beb8c60_33747637',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561b9f6beef5d9_13611270',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561b9f6beef5d9_13611270')) {
function content_561b9f6beef5d9_13611270 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199104341561b9f6beb8c60_33747637';
if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
	<form action = "index.php?action=feedback" method = "post" name = "feedback" class = "feedform">
		
		<label><span class = "req_stars">* </span>Заголовок отзыва:<br>
			<input type = "text" name = "title" class = "title_field" autofocus onkeypress="if(event.keyCode==13) feed_validate(this.form);">
			
		</label><br>

		<label><span class = "req_stars">* </span>e-mail: <br>
			<input type="text" name = "email" onkeypress="if(event.keyCode==13) feed_validate(this.form);">
			
		</label><br>
		
		<label><span class = "req_stars">* </span>Отзыв: <br>
			<textarea name = "message"></textarea>
			
		</label><br>
		
		<input type="button" onclick="feed_validate(this.form)" value="Отправить">
		


		<p class = "req_text"><span style = "color:red; vertical-align: sub;">*</span> - Поля, обязательные для заполнения</p>	
	</form>
  <?php echo '<script'; ?>
 src = "/themes/theme01/templates/validator2.js"><?php echo '</script'; ?>
>
<?php }
}
}
?>