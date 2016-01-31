<?php

/**
 * ECSHOP 投票管理
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $Id: virtual_card.php 15086 2008-10-27 06:21:49Z testyang $
*/

/*------------------------------------------------------ */
//-- 卡片資料
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = '虛擬商品列表';
$_LANG['lab_goods_name'] = '商品名稱';
$_LANG['replenish'] = '補貨';
$_LANG['lab_card_id'] = '編號';
$_LANG['lab_card_sn'] = '卡片編號';
$_LANG['lab_card_password'] = '卡片密碼';
$_LANG['lab_end_date'] = '截止日期';
$_LANG['lab_is_saled'] = '是否售出';
$_LANG['lab_order_sn'] = '訂單編號';
$_LANG['action_success'] = '操作成功';
$_LANG['action_fail'] = '操作失敗';
$_LANG['card'] = '卡片列表';

$_LANG['batch_card_add'] = '大量補貨';

$_LANG['separator'] = '分隔符';
$_LANG['uploadfile'] = '上傳檔案';
$_LANG['sql_error'] = '第 %s 筆資料出錯：<br /> ';

/* 提示資料 */
$_LANG['replenish_no_goods_id'] = '缺少商品ID參數，無法進行補貨操作';
$_LANG['replenish_no_get_goods_name'] = '商品ID參數有誤，無法取得商品名';
$_LANG['drop_card_success'] = '該記錄已成功刪除';
$_LANG['batch_drop'] = '批次刪除';
$_LANG['drop_card_confirm'] = '你確定刪除該記錄嗎？';
$_LANG['card_sn_exist'] = '卡片編號 %s 已經存在，請重新輸入';
$_LANG['go_list'] = '返回補貨列表';
$_LANG['continue_add'] = '繼續補貨';
$_LANG['uploadfile_fail'] = '檔案上傳失敗';
$_LANG['batch_card_add_ok'] = '已成功新增 %s 筆補貨序號';

$_LANG['js_languages']['no_card_sn'] = '卡片編號和卡片密碼不能都為空。';
$_LANG['js_languages']['separator_not_null'] = '分隔符號不能為空。';
$_LANG['js_languages']['uploadfile_not_null'] = '請選擇要上傳的檔案。';

$_LANG['use_help'] = '使用說明：' .
        '<ol>' .
          '<li>上傳檔案應為CSV檔案<br />' .
              'CSV檔案第一列為卡片編號；第二列為卡片密碼；第三列為使用截止日期。<br />'.
              '(用EXCEL建立csv檔案方法：在EXCEL中依照卡號、卡片密碼、截止日期的順序填寫資料，完成後直接儲存為csv檔案即可)'.
          '<li>密碼，和截止日期可以為空，截止日期格式為2006-11-6或2006/11/6'.
          '<li>卡號、卡片密碼、截止日期中不要使用中文</li>' .
        '</ol>';

/*------------------------------------------------------ */
//-- 改變加密串
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = '更改加密串';
$_LANG['user_guide'] = '使用說明：' .
        '<ol>' .
          '<li>加密串是在加密虛擬商品類商品的卡號和密碼時使用的</li>' .
          '<li>加密串儲存在檔案 includes/lib_code.php 中，對應的常量是 AUTH_KEY</li>' .
          '<li>如果要更改加密串，首先要修改檔案 lib_code.php，把 OLD_AUTH_KEY 設定為更改前使用的加密串，把 AUTH_KEY 修改為新加密串；然後在下面的文字框中輸入原加密串和新加密串，點\'確定\'按鈕後即可</li>' .
        '</ol>';
$_LANG['label_old_string'] = '原加密串';
$_LANG['label_new_string'] = '新加密串';

$_LANG['invalid_old_string'] = '原加密串不正確';
$_LANG['invalid_new_string'] = '新加密串不正確';
$_LANG['change_key_ok'] = '更改加密串成功';
$_LANG['same_string'] = '新加密串跟原加密串相同';

$_LANG['update_log'] = '更新記錄';
$_LANG['old_stat'] = '總共有記錄 %s 條。已使用新串加密的記錄有 %s 條，使用原串加密（待更新）的記錄有 %s 條，使用未知串加密的記錄有 %s 條。';
$_LANG['new_stat'] = '<strong>更新完畢</strong>，現在使用新串加密的記錄有 %s 條，使用未知串加密的記錄有 %s 條。';
$_LANG['update_error'] = '更新過程中出錯：%s';
$_LANG['js_languages']['updating_info'] = '<strong>正在更新</strong>（每次 100 筆記錄）';
$_LANG['js_languages']['updated_info'] = '<strong>已更新</strong> <span id=\"updated\">0</span> 筆記錄。';
?>