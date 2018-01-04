<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:51
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/feedback/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:20265750595a4ebb47b0d052-03779269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e05a48306fe9942d742b0c0cccce194a790bc3' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/feedback/view/main/window.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20265750595a4ebb47b0d052-03779269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb47b58870_59271588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb47b58870_59271588')) {function content_5a4ebb47b58870_59271588($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Feedback Main Window
 *
 * This file contains the business logic for the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.Feedback.view.main.Window', {
    extend: 'Enlight.app.Window',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','default'=>'Feedback','namespace'=>'backend/feedback/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Feedback','namespace'=>'backend/feedback/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Feedback<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Feedback','namespace'=>'backend/feedback/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    alias: 'widget.feedback-main-window',
    border: false,
    layout: 'fit',
    autoShow: true,
    height: '90%',
    width: 1200,
    stateful: true,
    stateId: 'feedback-main-window',

    /**
     * Property which represents the iframe "src"-URL
     * @string
     */
    requestUrl: 'https://issues.shopware.com/#/?embedded=1',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [{
            xtype: 'container',
            // We need to hack the iframe to inject it into the Ext.window.Window
            html: '<ifr' + 'ame id="iframe-' + Ext.id() + '" border="0" src="'+ me.requestUrl +'"></ifr' + 'ame>',
            listeners: {
                'afterrender': function () {
                    this.getEl().dom.children[0].onload = function () {
                        me.setWidth(me.getWidth() + 1);
                    }
                }
            }
        }];
        me.callParent(arguments);
    }
});
//
<?php }} ?>