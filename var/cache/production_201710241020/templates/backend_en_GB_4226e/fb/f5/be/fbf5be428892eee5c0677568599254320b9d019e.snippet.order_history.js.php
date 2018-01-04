<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:50
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/order/model/order_history.js" */ ?>
<?php /*%%SmartyHeaderCode:17673230665a4ebb468949d3-83116546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf5be428892eee5c0677568599254320b9d019e' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/order/model/order_history.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17673230665a4ebb468949d3-83116546',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb468b85a3_67715438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb468b85a3_67715438')) {function content_5a4ebb468b85a3_67715438($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Order.model.OrderHistory', {

   /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

   /**
    * The fields used for this model
    * @array
    */
    fields: [
       //
        { name : 'id', type: 'int' },
        { name : 'userName', type: 'string' },
        { name : 'changeDate', type: 'date' },
        { name : 'prevOrderStatusId', type: 'int' },
        { name : 'currentOrderStatusId', type: 'int' },
        { name : 'prevPaymentStatusId', type: 'int' },
        { name : 'currentPaymentStatusId', type: 'int' }
    ]
});
//

<?php }} ?>