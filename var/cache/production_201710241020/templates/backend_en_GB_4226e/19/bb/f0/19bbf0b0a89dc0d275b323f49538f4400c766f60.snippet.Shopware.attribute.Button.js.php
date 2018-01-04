<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:47
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/attribute/Shopware.attribute.Button.js" */ ?>
<?php /*%%SmartyHeaderCode:1080000975a4ebb4316d466-21251844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19bbf0b0a89dc0d275b323f49538f4400c766f60' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/attribute/Shopware.attribute.Button.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080000975a4ebb4316d466-21251844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb4317e7d1_29320701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb4317e7d1_29320701')) {function content_5a4ebb4317e7d1_29320701($_smarty_tpl) {?>/**
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
//
Ext.define('Shopware.attribute.Button', {
    extend: 'Ext.button.Button',

    table: null,
    allowTranslation: true,
    backendAttributes: [],
    hidden: true,
    iconCls: 'sprite-attributes',
    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"attribute_button",'namespace'=>'backend/attributes/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"attribute_button",'namespace'=>'backend/attributes/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"attribute_button",'namespace'=>'backend/attributes/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    cls: 'secondary small',

    initComponent: function() {
        var me = this;

        me.attributeWindow = Ext.create('Shopware.attribute.Window', {
            table: me.table,
            allowTranslation: me.allowTranslation
        });

        me.attributeWindow.attributeForm.on('config-loaded', function(fields) {
            me.backendAttributes = fields;
            me.switchButton();
        });

        me.handler = function() {
            me.openAttributes(me.record);
        };

        me.callParent(arguments);
    },

    openAttributes: function(record) {
        var me = this;

        me.attributeWindow = Ext.create('Shopware.attribute.Window', {
            table: me.table,
            allowTranslation: me.allowTranslation
        });
        me.attributeWindow.show();
        me.attributeWindow.loadAttribute(record);
    },

    setRecord: function(record) {
        this.record = record;
        this.switchButton();
    },

    switchButton: function() {
        var me = this;
        me.hide();

        if (me.backendAttributes.length <= 0 || !me.record) {
            return;
        }
        me.show();
    }
});
//<?php }} ?>