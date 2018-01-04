<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:48
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/index/store/widget.js" */ ?>
<?php /*%%SmartyHeaderCode:14747946435a4ebb442897b3-92807238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56d6e30369896946709f270fc8834cb5656e117' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/index/store/widget.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14747946435a4ebb442897b3-92807238',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb44291bd3_91084542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb44291bd3_91084542')) {function content_5a4ebb44291bd3_91084542($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Index.store.Widget', {

    extend: 'Ext.data.Store',

    model: 'Shopware.apps.Index.model.Widget',

    batch: true,
    remoteFilter: true,
    clearOnLoad: false,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/widgets/getList';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});

//
<?php }} ?>