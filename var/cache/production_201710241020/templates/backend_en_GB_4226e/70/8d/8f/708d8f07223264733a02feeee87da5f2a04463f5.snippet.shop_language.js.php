<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:46
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/shop_language.js" */ ?>
<?php /*%%SmartyHeaderCode:5714066825a4ebb4242db09-91903528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708d8f07223264733a02feeee87da5f2a04463f5' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/shop_language.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5714066825a4ebb4242db09-91903528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb42430c43_68977404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb42430c43_68977404')) {function content_5a4ebb42430c43_68977404($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * Base store for both language and sub-shops
 */
Ext.define('Shopware.apps.Base.store.ShopLanguage', {
    extend: 'Shopware.apps.Base.store.Shop',
    alternateClassName: 'Shopware.store.ShopLanguage',
    storeId: 'base.ShopLanguage',
    filters: [ ]
}).create();

<?php }} ?>