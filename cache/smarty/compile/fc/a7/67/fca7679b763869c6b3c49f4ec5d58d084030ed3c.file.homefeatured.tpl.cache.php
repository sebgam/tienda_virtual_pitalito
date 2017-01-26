<?php /* Smarty version Smarty-3.1.19, created on 2017-01-16 16:42:19
         compiled from "C:\xampp\htdocs\los_celulares\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8587587d3e3b556fb9-25784053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca7679b763869c6b3c49f4ec5d58d084030ed3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\los_celulares\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1480109588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8587587d3e3b556fb9-25784053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587d3e3b5a37e7_65280322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d3e3b5a37e7_65280322')) {function content_587d3e3b5a37e7_65280322($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
