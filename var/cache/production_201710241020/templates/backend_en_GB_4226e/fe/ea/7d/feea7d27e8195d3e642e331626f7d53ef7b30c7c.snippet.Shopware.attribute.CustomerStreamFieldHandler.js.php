<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:47
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.CustomerStreamFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:7346192715a4ebb4309a797-31689302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feea7d27e8195d3e642e331626f7d53ef7b30c7c' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.CustomerStreamFieldHandler.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7346192715a4ebb4309a797-31689302',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb430a20b4_86076462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb430a20b4_86076462')) {function content_5a4ebb430a20b4_86076462($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//

Ext.define('Shopware.attribute.CustomerStreamFieldHandler', {
    extend: 'Shopware.attribute.AbstractEntityFieldHandler',
    entity: "Shopware\\Models\\CustomerStream\\CustomerStream",
    singleSelectionClass: 'Shopware.form.field.CustomerStreamSingleSelection',
    multiSelectionClass: 'Shopware.form.field.CustomerStreamGrid'
});

//<?php }} ?>