<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:50
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/create_date.js" */ ?>
<?php /*%%SmartyHeaderCode:12738038395a4ebb46e60309-02911833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd80bf33dc6b8fff4b6889ab6f355b0d928a335' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/create_date.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12738038395a4ebb46e60309-02911833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb46e73118_79083133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb46e73118_79083133')) {function content_5a4ebb46e73118_79083133($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.CreateDate', {

    extend: 'Ext.form.FieldContainer',
    layout: { type: 'hbox', align: 'stretch' },
    mixins: [ 'Ext.form.field.Base' ],
    height: 30,
    value: undefined,

    initComponent: function() {
        var me = this;
        me.items = me.createItems();
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;
        return [
            me.createDayField()
        ];
    },

    createDayField: function() {
        var me = this;

        me.dayField = Ext.create('Ext.form.field.Number', {
            labelWidth: 150,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create_date'/'input_text','default'=>'in the last X days','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_date'/'input_text','default'=>'in the last X days','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
in the last X days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create_date'/'input_text','default'=>'in the last X days','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            minValue: 1,
            value: 1,
            padding: '0 0 0 10',
            flex: 1
        });
        return me.dayField;
    },

    getValue: function() {
        return this.value;
    },

    setValue: function(value) {
        var me = this;

        me.value = value;

        if (!Ext.isObject(value)) {
            me.dayField.setValue(1);
            return;
        }

        if (value.hasOwnProperty('days')) {
            me.dayField.setValue(value.days);
        }
    },

    getSubmitData: function() {
        var value = {};

        value[this.name] = {
            days: this.dayField.getValue()
        };
        return value;
    }
});
//<?php }} ?>