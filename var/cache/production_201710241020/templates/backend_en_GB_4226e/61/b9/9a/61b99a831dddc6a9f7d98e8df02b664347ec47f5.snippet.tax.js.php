<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:50
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/order/model/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:17638855075a4ebb46966bc5-91459981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b99a831dddc6a9f7d98e8df02b664347ec47f5' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/order/model/tax.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17638855075a4ebb46966bc5-91459981',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb46979482_15400835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb46979482_15400835')) {function content_5a4ebb46979482_15400835($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.model.Tax', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'id', type:'int' },
        { name: 'tax', type:'float' },
        { name: 'name', type:'string' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Specific urls to call on CRUD action methods "create", "read", "update" and "destroy".
         * @object
         */
         url: '<?php echo '/backend/Order/getTax';?>',

        /**
         * The Ext.data.reader.Reader to use to decode the server's
         * response or data read from client. This can either be a Reader instance,
         * a config object or just a valid Reader type name (e.g. 'json', 'xml').
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }

});
//
<?php }} ?>