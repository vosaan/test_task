<?php /* Smarty version 3.1.27, created on 2015-10-12 13:53:24
         compiled from "/home/vo/www/test.local/themes/theme01/templates/fail.html" */ ?>
<?php
/*%%SmartyHeaderCode:2024190719561b9f340c3942_06863284%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8af7e6f0c1935ca4d04f6d9d5cfc3fb8093e17d6' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/fail.html',
      1 => 1444650655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024190719561b9f340c3942_06863284',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561b9f340f18f0_31854853',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561b9f340f18f0_31854853')) {
function content_561b9f340f18f0_31854853 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2024190719561b9f340c3942_06863284';
?>
<div class = "fail">
	<h3>Ошибка авторизации!</h3>
	<p>Пользователя с такой комбинацией логина и пароля не существует.</p>
	<p>Попробуйте ещё раз <a href="index.php">войти</a> на сайт или <a href = "index.php?action=reg">зарегистрируйтесь</a>.</p>
</div><?php }
}
?>