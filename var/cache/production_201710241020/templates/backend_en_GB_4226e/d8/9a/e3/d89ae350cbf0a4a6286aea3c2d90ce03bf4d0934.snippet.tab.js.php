<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:40:04
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/theme/view/detail/containers/tab.js" */ ?>
<?php /*%%SmartyHeaderCode:16901356495a4ebb546ddcd1-94708022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd89ae350cbf0a4a6286aea3c2d90ce03bf4d0934' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/theme/view/detail/containers/tab.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16901356495a4ebb546ddcd1-94708022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb546e1a81_88394591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb546e1a81_88394591')) {function content_5a4ebb546e1a81_88394591($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.detail.containers.Tab', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.theme-tab',
    bodyPadding: 15,
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    defaults: {
        flex: 1
    }
});
<?php }} ?>