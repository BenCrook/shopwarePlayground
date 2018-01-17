<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:51:10
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Frontend/Bare/frontend/error/cli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7031622625a4ebdee5e4747-94569196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4d37e6e7cfe77adb86de85f5af366466fd170e' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Frontend/Bare/frontend/error/cli.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7031622625a4ebdee5e4747-94569196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'exception' => 0,
    'error_file' => 0,
    'error_trace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebdee6018d7_06102762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebdee6018d7_06102762')) {function content_5a4ebdee6018d7_06102762($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['exception']->value){?>
ERROR:
<?php echo $_smarty_tpl->tpl_vars['exception']->value->getMessage();?>
 in <?php echo $_smarty_tpl->tpl_vars['error_file']->value;?>
 on line <?php echo $_smarty_tpl->tpl_vars['exception']->value->getLine();?>


TRACE:
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_trace']->value, ENT_QUOTES, 'utf-8', true);?>

<?php }else{ ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"InformText",'default'=>'Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.','namespace'=>'frontend/error/cli','tag'=>"span")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"InformText",'default'=>'Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.','namespace'=>'frontend/error/cli','tag'=>"span"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"InformText",'default'=>'Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.','namespace'=>'frontend/error/cli','tag'=>"span"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>