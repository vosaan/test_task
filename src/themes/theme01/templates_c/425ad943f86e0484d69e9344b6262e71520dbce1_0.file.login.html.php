<?php /* Smarty version 3.1.27, created on 2015-10-12 13:53:18
         compiled from "/home/vo/www/test.local/themes/theme01/templates/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:1954931491561b9f2e6ad4e7_11911714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425ad943f86e0484d69e9344b6262e71520dbce1' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/login.html',
      1 => 1444650655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954931491561b9f2e6ad4e7_11911714',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561b9f2e6dba35_47445437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561b9f2e6dba35_47445437')) {
function content_561b9f2e6dba35_47445437 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1954931491561b9f2e6ad4e7_11911714';
?>
<div class="auth_wrap">
	<form method = "POST" action = "index.php?action=auth" name = "login">
		<label>Логин:<br>
		<input type = 'text' name = "auth_form_login" class = "form_field" autofocus onkeypress="if(event.keyCode==13) login_validate(this.form);">
		</label><br>
		<label>
		Пароль:<br>
		<input type = 'password' name = "auth_form_password" class = "form_field" onkeypress="if(event.keyCode==13) login_validate(this.form);">
		</label><br>
		
		<input type="button" onclick="login_validate(this.form)" value="Войти" class = "form_field">

		<p style = "text-align: center"><a href="index.php?action=reg">Регистрация</a></p>
	</form>
</div>

<?php echo '<script'; ?>
 src = "/themes/theme01/templates/validator2.js"><?php echo '</script'; ?>
><?php }
}
?>