<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }


/**
 * Hooks
 */
/**
function fn_product_state_change_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
            $product_state = db_get_state('SELECT price_id FROM ?:yml_exclude_objects WHERE object_id = ?i AND object_type = ?s',
            $product_id, 'product');
}
*/