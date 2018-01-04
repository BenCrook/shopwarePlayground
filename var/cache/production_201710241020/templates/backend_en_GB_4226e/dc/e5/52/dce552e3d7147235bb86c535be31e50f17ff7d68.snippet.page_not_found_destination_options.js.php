<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:46
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/model/page_not_found_destination_options.js" */ ?>
<?php /*%%SmartyHeaderCode:11370767285a4ebb42370c96-63044160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce552e3d7147235bb86c535be31e50f17ff7d68' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/model/page_not_found_destination_options.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11370767285a4ebb42370c96-63044160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb4237de17_54911226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb4237de17_54911226')) {function content_5a4ebb4237de17_54911226($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware "Page Not Found" Destination Options Model
 *
 * The "Page Not Found" destination options model contains the possible options for a 404 page.
 * It always has the 2 default options, plus emotion landing pages.
 */
//
Ext.define('Shopware.apps.Base.model.PageNotFoundDestinationOptions', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.PageNotFoundDestinationOptions',
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' }
    ]
});
//
<?php }} ?>