<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:52
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/article/store/esd_file.js" */ ?>
<?php /*%%SmartyHeaderCode:383773355a4ebb48b19b62-69106371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0152c71f96e862bf192737b1978cf71f5a208f5' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/article/store/esd_file.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '383773355a4ebb48b19b62-69106371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb48b20878_13790356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb48b20878_13790356')) {function content_5a4ebb48b20878_13790356($_smarty_tpl) {?>/**
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
 *
 * @category   Shopware
 * @package    Article
 * @subpackage Esd
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 */
//
Ext.define('Shopware.apps.Article.store.EsdFile', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',


    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Article.model.EsdFile',

    /**
     * Disable auto loading for this store
     * @boolean
     */
    autoLoad: false,
    pageSize: 15
});
//

<?php }} ?>