<?php /* Smarty version Smarty-3.1.12, created on 2018-01-05 00:39:46
         compiled from "/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/form.js" */ ?>
<?php /*%%SmartyHeaderCode:10033828605a4ebb424ed321-14375201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f7c72cb82e16a2ad0f4c8c4ed19d35817722cd' => 
    array (
      0 => '/Users/bencrook/Documents/my-projects/shopware/themes/Backend/ExtJs/backend/base/store/form.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10033828605a4ebb424ed321-14375201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a4ebb42500577_15596104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4ebb42500577_15596104')) {function content_5a4ebb42500577_15596104($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.store.Form', {
    extend: 'Ext.data.Store',
    alternateClassName: 'Shopware.store.Form',
    storeId: 'base.Form',

    model:'Shopware.apps.Base.model.Form',
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/config/getForm';?>',
        api: {
            create: '<?php echo '/backend/config/saveForm';?>',
            update: '<?php echo '/backend/config/saveForm';?>',
            destroy: '<?php echo '/backend/config/deleteForm';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>