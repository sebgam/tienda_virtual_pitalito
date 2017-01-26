<?php /* Smarty version Smarty-3.1.19, created on 2017-01-16 18:30:12
         compiled from "C:\xampp\htdocs\los_celulares\modules\payulatam\views\templates\hook\payulatam_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20831587d5784dd09d8-50493657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9af051ca688b50475639c43005aceb642e86cb77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\los_celulares\\modules\\payulatam\\views\\templates\\hook\\payulatam_payment.tpl',
      1 => 1484606754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20831587d5784dd09d8-50493657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587d5784dd9080_27070953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d5784dd9080_27070953')) {function content_587d5784dd9080_27070953($_smarty_tpl) {?>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
payu.css" rel="stylesheet" type="text/css">
<div class="row">
	<div class="col-xs-12 col-md-6">
		<p class="payment_module">
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
validation.php" class="link-redirect">
				<?php echo smartyTranslate(array('s'=>'Pay by PayU','mod'=>'payulatam'),$_smarty_tpl);?>

			</a>
		</p>
	</div>
</div><?php }} ?>
