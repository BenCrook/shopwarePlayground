<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:45
         compiled from "/Users/bencrook/Documents/my-projects/shopware/engine/Library/ExtJs/overrides/Ext.form.field.Display.js" */ ?>
<?php /*%%SmartyHeaderCode:4797936075a4ebb4196ebe6-75554682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e407a560fb68d6bea9db0f0a9c471d171053ee' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/engine/Library/ExtJs/overrides/Ext.form.field.Display.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4797936075a4ebb4196ebe6-75554682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb41971a33_11626221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb41971a33_11626221')) {function content_5a4ebb41971a33_11626221($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */
Ext.override(Ext.form.field.Display, {
    /**
     * Property which enables the unescaped output of html content
     * @default false
     * @boolean
     */
    allowHtml: false,

    /**
     * @inheritDoc
     */
    getDisplayValue: function() {
        var me = this,
            value = me.callParent(arguments);

        if (me.allowHtml !== true && typeof value === 'string') {
            value = Ext.String.getText(value);
        }

        return value;
    }
});
<?php }} ?>