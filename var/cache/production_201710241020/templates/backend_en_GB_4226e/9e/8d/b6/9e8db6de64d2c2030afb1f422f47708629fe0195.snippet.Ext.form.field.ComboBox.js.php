<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:45
         compiled from "/Users/bencrook/Documents/my-projects/shopware/engine/Library/ExtJs/overrides/Ext.form.field.ComboBox.js" */ ?>
<?php /*%%SmartyHeaderCode:2073882955a4ebb418a2d37-19006367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e8db6de64d2c2030afb1f422f47708629fe0195' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/engine/Library/ExtJs/overrides/Ext.form.field.ComboBox.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073882955a4ebb418a2d37-19006367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb418a70e7_42571119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb418a70e7_42571119')) {function content_5a4ebb418a70e7_42571119($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - ComboBox Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element.
 */
Ext.override(Ext.form.field.ComboBox,
/** @lends Ext.form.field.ComboBox */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Additional suffix which will be added
     * to the value as a suffix
     */
    valueSuffix: '-table',

    /**
     * Adds an additional HTML5 "data"-attribute
     * to easier address the element in our
     * selenium tests.
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.el.dom) {
            var dom = me.el.dom,
                value = (me.listConfig) ? me.listConfig.action : me.name;

            dom.setAttribute('data-' + me.dataSuffix, value + me.valueSuffix);
        }
    }
});
<?php }} ?>