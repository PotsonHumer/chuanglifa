<?php

/**
 * ECSHOP 管理中心配送方式管理語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $Id: shipping.php 15086 2008-10-27 06:21:49Z testyang $
*/

$_LANG['shipping_name'] = '配送方式名稱';
$_LANG['shipping_version'] = '模組版本';
$_LANG['shipping_desc'] = '配送方式描述';
$_LANG['shipping_author'] = '模組作者';
$_LANG['insure'] = '保值費用';
$_LANG['support_cod'] = '貨到付款？';
$_LANG['shipping_area'] = '設定區域';
$_LANG['shipping_print_edit'] = '編輯列印版型';
$_LANG['shipping_print_template'] = '貨運單版型';
$_LANG['shipping_template_info'] = '訂單版型變量說明:<br/>{$shop_name}表示商店名稱<br/>{$province}表示商店所屬省份<br/>{$city}表示商店所屬城市<br/>{$shop_address}表示商店地址<br/>{$service_phone}表示商店聯絡電話<br/>{$order.order_amount}表示訂單金額<br/>{$order.region}表示收件人地區<br/>{$order.tel}表示收件人電話<br/>{$order.mobile}表示收件人行動電話<br/>{$order.zipcode}表示收件人郵遞區號<br/>{$order.address}表示收件人詳細地址<br/>{$order.consignee}表示收件人名稱<br/>{$order.order_sn}表示訂單編號';

/* 表單部分 */
$_LANG['shipping_install'] = '安裝配送方式';
$_LANG['install_succeess'] = '配送方式 %s 安裝成功！';

/* 提示資料 */
$_LANG['no_shipping_name'] = '很抱歉，配送方式名稱不能為空。';
$_LANG['no_shipping_desc'] = '很抱歉，配送方式描述內容不能為空。';
$_LANG['repeat_shipping_name'] = '很抱歉，已經存在一個同名的配送方式。';
$_LANG['uninstall_success'] = '配送方式 %s 已移除。';
$_LANG['add_shipping_area'] = '為該配送方式新建配送區域';
$_LANG['no_shipping_insure'] = '很抱歉，保值費用不能為空，不想使用請將其設定為0';
$_LANG['not_support_insure'] = '該配送方式不支援保值,保值費用設定失敗';
$_LANG['invalid_insure'] = '配送保值費用不是一個合法價格';
$_LANG['no_shipping_install'] = '您的配送方式尚未安裝，暫不能編輯版型';
$_LANG['edit_template_success'] = '快遞版型已編輯。';

/* JS 語言 */
$_LANG['js_languages']['lang_removeconfirm'] = '確定移除該配送方式嗎？';
$_LANG['js_languages']['shipping_area'] = '設定區域';

?>