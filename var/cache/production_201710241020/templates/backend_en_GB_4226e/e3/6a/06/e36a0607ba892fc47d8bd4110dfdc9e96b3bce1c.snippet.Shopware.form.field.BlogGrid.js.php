<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:46
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.BlogGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:7705466035a4ebb42cc16f4-21149120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36a0607ba892fc47d8bd4110dfdc9e96b3bce1c' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.BlogGrid.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7705466035a4ebb42cc16f4-21149120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb42cc60a2_74435110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb42cc60a2_74435110')) {function content_5a4ebb42cc60a2_74435110($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.BlogGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-blog-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;

        var displayColumn = { dataIndex: 'displayDate', flex: 1 };
        me.applyDateColumnConfig(displayColumn);

        return [
            me.createSortingColumn(),
            { dataIndex: 'authorName' },
            { dataIndex: 'title', flex: 1 },
            displayColumn,
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.BlogSingleSelection', this.getComboConfig());
    }
});<?php }} ?>