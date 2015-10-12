<?php /* Smarty version 3.1.27, created on 2015-10-12 13:53:29
         compiled from "/home/vo/www/test.local/themes/theme01/templates/registration.html" */ ?>
<?php
/*%%SmartyHeaderCode:920182682561b9f39c295a5_09589269%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4e80c784aed3917f252903af0ad7e4619fc693' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/registration.html',
      1 => 1444650655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '920182682561b9f39c295a5_09589269',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561b9f39c5a694_51045474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561b9f39c5a694_51045474')) {
function content_561b9f39c5a694_51045474 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '920182682561b9f39c295a5_09589269';
?>
<div class = "reg_wrap">
	<div class = "reg_wrap_form">
		<form action = "" method = "POST" class = "login_form" name = "reg">
			<label><span class = "req_stars">* </span>Логин:<br>
					<input type = "text" name="reg_form_login" size="15" class="form_field" autofocus onkeypress="if(event.keyCode==13) reg_validate(this.form);">
			</label><br>
			
			<label><span class = "req_stars">* </span>Пароль:<br>
					<input type = "password" name="reg_form_password" size="15" class="form_field" onkeypress="if(event.keyCode==13) reg_validate(this.form);">
			</label><br>		
			
			<label><span class = "req_stars">* </span>Пароль ещё раз:<br>
					<input type = "password" name="reg_form_password_confirm" size="15" class="form_field" onkeypress="if(event.keyCode==13) reg_validate(this.form);">
			</label><br>
						
			<input type="button" onclick="reg_validate(this.form)"  value="Зарегистрироваться" class="form_field">
			<p style = "text-align: center"><a href = "index.php">Авторизация</a></p>
		</form>			
	</div>
	
	<div class = "reg_wrap_text">
		<p class = "req_text"><span style = "color:red; vertical-align: sub;">*</span> - Поля, обязательные для заполнения</p>
		<p class = "reg_notice">Логин должен содержать от 3 до 15 символов и может состоять из <strong>строчных</strong> латинских символов (a-z), символов "-", "_" и цифр.</p>
		<p class = "reg_notice">Пароль должен содержать от 6 до 15 символов и может состоять из <strong>строчных</strong> латинских символов (a-z), символов "-", "_" и цифр.</p>
	</div>
</div>

<?php echo '<script'; ?>
 src = "/themes/theme01/templates/validator2.js"><?php echo '</script'; ?>
><?php }
}
?>