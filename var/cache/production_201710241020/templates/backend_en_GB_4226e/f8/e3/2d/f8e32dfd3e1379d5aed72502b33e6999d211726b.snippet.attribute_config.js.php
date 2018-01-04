<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:46
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:1461079945a4ebb425969a0-09941549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e32dfd3e1379d5aed72502b33e6999d211726b' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/attribute_config.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461079945a4ebb425969a0-09941549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb4259ac44_70494403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb4259ac44_70494403')) {function content_5a4ebb4259ac44_70494403($_smarty_tpl) {?>
Ext.define('Shopware.store.AttributeConfig', {
    extend: 'Shopware.store.Listing',
    model: 'Shopware.model.AttributeConfig',
    remoteSort: false,

    configure: function() {
        return {
            controller: 'AttributeData'
        }
    }
});
<?php }} ?>