<?php /* Smarty version 3.1.27, created on 2015-10-10 18:08:02
         compiled from "/home/vo/www/test.local/themes/theme01/templates/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:550449310561937e2d06025_28334007%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31cbb77c6fbb9da5870e5ec7e523c60a6744490e' => 
    array (
      0 => '/home/vo/www/test.local/themes/theme01/templates/footer.html',
      1 => 1444332472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '550449310561937e2d06025_28334007',
  'variables' => 
  array (
    'year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561937e2d5f785_61970940',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561937e2d5f785_61970940')) {
function content_561937e2d5f785_61970940 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '550449310561937e2d06025_28334007';
?>
		<!-- Begin of footer -->	
		</div>	
	</div>
</div>

<footer>
	<div class = "footer_content">
		<div class = "footer_content_copy">&copy; My first site, <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</div>
	</div>
</footer>	
</body>
</html><?php }
}
?>