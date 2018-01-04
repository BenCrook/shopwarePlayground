<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:47
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/custom_sorting.js" */ ?>
<?php /*%%SmartyHeaderCode:17560057165a4ebb431ad390-71210693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a0fe079d5d64a74afc5d6663b241a708c6409d' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/custom_sorting.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17560057165a4ebb431ad390-71210693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb431b82a9_91009577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb431b82a9_91009577')) {function content_5a4ebb431b82a9_91009577($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Base.store.CustomSorting', {
    extend:'Shopware.store.Listing',

    sorters: [{
        property: 'position',
        direction: 'ASC'
    }],

    configure: function() {
        return {
            controller: 'CustomSorting'
        };
    },
    model: 'Shopware.apps.Base.model.CustomSorting'
});

//
<?php }} ?>