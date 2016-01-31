<?php

/**
 * ECSHOP 管理中心會員資料整合模組管理程序語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: sunxiaodong $
 * $CHT by: 00992266 @ ECClub.tw $
 * $Id: integrate.php 15716 2009-03-06 03:22:25Z sunxiaodong $
*/

$_LANG['integrate_name'] = '名稱';
$_LANG['integrate_version'] = '版本';
$_LANG['integrate_author'] = '作者';

/* 模組列表 */
$_LANG['update_success'] = '設置會員資料整合模組已經成功。';
$_LANG['install_confirm'] = '確定安裝該會員資料整合模組嗎？';
$_LANG['need_not_setup'] = '當您採用ECSHOP會員系統時，無須進行設定。';
$_LANG['different_domain'] = '您設定的整合對像和 ECSHOP 不在同一網域下。<br />您將只能共享該系統的會員資料，但無法實現同時登入。';
$_LANG['points_set'] = '紅利積點兌換設定';
$_LANG['view_user_list'] = '檢視論壇會員';
$_LANG['view_install_log'] = '檢視安裝記錄';

$_LANG['integrate_setup'] = '設定會員資料整合模組';
$_LANG['continue_sync'] = '繼續同步會員資料';
$_LANG['go_userslist'] = '返回會員帳號列表';
$_LANG['user_help'] = '<pre>
使用方法：
         1:如果需要整合其他的會員系統，可以安裝適當的外掛版本以進行整合。
         2:如果需要更換整合的會員系統，直接安裝目標外掛即可完成整合，同時自動移除前一次整合外掛。
         3:如果不需要整合任何會員系統，請選擇安裝ecshop外掛，即可移除所有的整合外掛。
                           </pre>';

/* 檢視安裝記錄 */
$_LANG['lost_install_log'] = '找不到安裝記錄檔';
$_LANG['empty_install_log'] = '安裝記錄檔為空';

/* 表單相關語言項 */
$_LANG['db_notice'] = '按「<font color="#000000">下一步</font>」將引導你到將商店會員資料同步到整合論壇。如果不需同步資料請按「<font color="#000000">直接儲存設定資料</font>」';

$_LANG['lable_db_host'] = '資料庫伺服器主機名：';
$_LANG['lable_db_name'] = '資料庫名：';
$_LANG['lable_db_chartset'] = '資料庫字符集：';
$_LANG['lable_is_latin1'] = '是否為latin1編碼';
$_LANG['lable_db_user'] = '資料庫帳號：';
$_LANG['lable_db_pass'] = '資料庫密碼：';
$_LANG['lable_prefix'] = '資料表前綴：';
$_LANG['lable_url'] = '被整合系統的完整網址：';
/* 表單相關語言項(discus5x) */
$_LANG['cookie_prefix']          = 'COOKIE前綴：';
$_LANG['cookie_salt']          = 'COOKIE加密串：';
$_LANG['button_next'] = '下一步';
$_LANG['button_force_save_config'] = '直接儲存設定資料';
$_LANG['save_confirm'] = '確定直接儲存設定資料嗎？';
$_LANG['button_save_config'] = '儲存設定資料';

$_LANG['error_db_msg'] = '資料庫地址、會員或密碼不正確';
$_LANG['error_db_exist'] = '資料庫不存在';
$_LANG['error_table_exist'] = '整合論壇關鍵資料表不存在，你填寫的資料有誤';

$_LANG['notice_latin1'] = '該選項填寫錯誤時將可能到導致中文會員名稱無法使用';
$_LANG['error_not_latin1'] = '整合資料庫檢測到不是latin1編碼！請重新選擇';
$_LANG['error_is_latin1'] = '整合資料庫檢測到是lantin1編碼！請重新選擇';
$_LANG['invalid_db_charset'] = '整合資料庫檢測到是%s 字符集，而非%s 字符集';
$_LANG['error_latin1'] = '你填寫的整合資料會導致嚴重錯誤，無法完成整合';

/* 檢查同名會員 */
$_LANG['conflict_username_check'] = '檢查商店會員是否和整合論壇會員有重名';
$_LANG['check_notice'] = '本頁將檢測商店已有會員和論壇會員是否有重名，按「開始檢查前」，請為商店重名會員選擇一個預設處理方法';
$_LANG['default_method'] = '如果檢測出商店有重名會員，請為這些會員選擇一個預設處理方法';
$_LANG['shop_user_total'] = '商店共有 %s 個會員待檢查';
$_LANG['lable_size'] = '每次檢查會員個數';
$_LANG['start_check'] = '開始檢查';
$_LANG['next'] = '下一步';
$_LANG['checking'] = '正在檢查...(請不要關閉瀏覽器)';
$_LANG['notice'] = '已經檢查 %s / %s ';
$_LANG['check_complete'] = '檢查完成';

/* 同名會員處理 */
$_LANG['conflict_username_modify'] = '商店重名會員列表';
$_LANG['modify_notice'] = '以下列出所有商店與論壇的重名會員及處理方法。如果您已確認所有操作，請按「開始整合」；您對重名會員的操作的更改需要按按鈕「儲存本頁更改」才能生效。';
$_LANG['page_default_method'] = '本頁面中重名會員預設處理方法';
$_LANG['lable_rename'] = '商店重名會員加後綴';
$_LANG['lable_delete'] = '刪除商店的重名會員及相關資料';
$_LANG['lable_ignore'] = '保留商店重名會員，論壇同名會員視為同一會員';
$_LANG['short_rename'] = '商店會員改名為';
$_LANG['short_delete'] = '刪除商店會員';
$_LANG['short_ignore'] = '保留商店會員';
$_LANG['user_name'] = '商店會員名稱';
$_LANG['email'] = 'email';
$_LANG['reg_date'] = '註冊日期';
$_LANG['all_user'] = '所有商店重名會員';
$_LANG['error_user'] = '需要重新選擇操作的商店會員';
$_LANG['rename_user'] = '需要改名的商店會員';
$_LANG['delete_user'] = '需要刪除的商店會員';
$_LANG['ignore_user'] = '需要保留的商店會員';

$_LANG['submit_modify'] = '儲存本頁變更';
$_LANG['button_confirm_next'] = '開始整合';


/* 會員同步 */
$_LANG['user_sync'] = '同步商店資料到論壇，並完成整合';
$_LANG['button_pre'] = '上一步';
$_LANG['task_name'] = '任務名';
$_LANG['task_status'] = '任務狀態';
$_LANG['task_del'] = '%s 個商店會員數待刪除';
$_LANG['task_rename'] = '%s 個商店會員需要改名';
$_LANG['task_sync'] = '%s 個商店會員需要同步到論壇';
$_LANG['task_save'] = '儲存設定資料，並完成整合';
$_LANG['task_uncomplete'] = '未完成';
$_LANG['task_run'] = '執行中 (%s / %s)';
$_LANG['task_complete'] = '已完成';
$_LANG['start_task'] = '開始任務';
$_LANG['sync_status'] = '已經同步 %s / %s';
$_LANG['sync_size'] = '每次處理會員數量';
$_LANG['sync_ok'] = '恭喜您。整合成功';


$_LANG['save_ok'] = '儲存成功';

/* 紅利積點設定 */
$_LANG['no_points'] = '沒有檢測到論壇有可以兌換的紅利積點';
$_LANG['bbs'] = '論壇';
$_LANG['shop_pay_points'] = '商店消費紅利積點';
$_LANG['shop_rank_points'] = '商店等級積分';
$_LANG['add_rule'] = '新增規則';
$_LANG['modify'] = '修改';
$_LANG['rule_name'] = '兌換規則';
$_LANG['rule_rate'] = '兌換比例';

/* JS語言項 */
$_LANG['js_languages']['no_host'] = '資料庫伺服器主機名不能為空。';
$_LANG['js_languages']['no_user'] = '資料庫帳號不能為空。';
$_LANG['js_languages']['no_name'] = '資料庫名不能為空。';
$_LANG['js_languages']['no_integrate_url'] = '請輸入整合對象的完整 URL';
$_LANG['js_languages']['install_confirm'] = '請不要在系統運行中隨意的更換整合對象。\r\n確定安裝該會員資料整合模組嗎？';
$_LANG['js_languages']['num_invalid'] = '同步資料的記錄數不是一個整數';
$_LANG['js_languages']['start_invalid'] = '同步資料的起始位置不是一個整數';
$_LANG['js_languages']['sync_confirm'] = '同步會員資料會將目標資料表重建。請在執行同步之前備份好您的資料。\r\n確定開始同步會員資料嗎？';

$_LANG['cookie_prefix_notice'] = 'UTF8版本的cookie前綴預設為xnW_，GB2312/GBK版本的cookie前綴預設為KD9_。';

$_LANG['js_languages']['no_method'] = '請選擇一種預設處理方法';

$_LANG['js_languages']['rate_not_null'] = '比例不能為空';
$_LANG['js_languages']['rate_not_int'] = '比例只能填整數';
$_LANG['js_languages']['rate_invailed'] = '你填寫一個無效的比例';
$_LANG['js_languages']['user_importing'] = '正在導入會員到UCenter中...';

/* UCenter設定語言項 */
$_LANG['ucenter_tab_base'] = '基本設定';
$_LANG['ucenter_tab_show'] = '顯示設定';
$_LANG['ucenter_lab_id'] = 'UCenter 應用 ID:';
$_LANG['ucenter_lab_key'] = 'UCenter 通信密鑰:';
$_LANG['ucenter_lab_url'] = 'UCenter 訪問地址:';
$_LANG['ucenter_lab_ip'] = 'UCenter IP 地址:';
$_LANG['ucenter_lab_connect'] = 'UCenter 連接方式:';
$_LANG['ucenter_lab_db_host'] = 'UCenter 資料庫伺服器:';
$_LANG['ucenter_lab_db_user'] = 'UCenter 資料庫會員名稱:';
$_LANG['ucenter_lab_db_pass'] = 'UCenter 資料庫密碼:';
$_LANG['ucenter_lab_db_name'] = 'UCenter 資料庫名:';
$_LANG['ucenter_lab_db_pre'] = 'UCenter 表前綴:';
$_LANG['ucenter_lab_tag_number'] = 'TAG 標籤顯示數量:';
$_LANG['ucenter_lab_credit_0'] = '等級積分名稱:';
$_LANG['ucenter_lab_credit_1'] = '消費紅利積點名稱:';
$_LANG['ucenter_opt_database'] = '資料庫方式';
$_LANG['ucenter_opt_interface'] = '接口方式';

$_LANG['ucenter_notice_id'] = '該值為目前商店在 UCenter 的應用 ID，一般情況請不要改動';
$_LANG['ucenter_notice_key'] = '通信密鑰用於在 UCenter 和 ECShop 之間傳輸資料的加密，可包含任何字母及數字，請在 UCenter 與 ECShop 設定完全相同的通訊密鑰，以確保兩套系統能夠正常通信';
$_LANG['ucenter_notice_url'] = '該值在您安裝完 UCenter 後會被初始化，在您 UCenter 地址或者目錄改變的情況下，修改此項，一般情況請不要改動 例如: http://www.sitename.com/uc_server (最後不要加"/")';
$_LANG['ucenter_notice_ip'] = '如果您的伺服器無法通過域名訪問 UCenter，可以輸入 UCenter 伺服器的 IP 地址';
$_LANG['ucenter_notice_connect'] = '請根據您的伺服器網絡環境選擇適當的連接方式';
$_LANG['ucenter_notice_db_host'] = '可以是本地也可以是遠程資料庫伺服器，如果 MySQL 連接埠不是預設的 3306，請填寫如下形式：127.0.0.1:6033';
$_LANG['uc_notice_ip'] = '連接的過程中出點問題，請填寫伺服器 IP 地址，如果您的 UC 與 ECShop 裝在同一伺服器上，我們建議您嘗試填寫 127.0.0.1';

$_LANG['uc_lab_url'] = 'UCenter 的 URL:';
$_LANG['uc_lab_pass'] = 'UCenter 創始人密碼:';
$_LANG['uc_lab_ip'] = 'UCenter 的 IP:';

$_LANG['uc_msg_verify_failur'] = '驗證失敗';
$_LANG['uc_msg_password_wrong'] = '創始人密碼錯誤';
$_LANG['uc_msg_data_error'] = '安裝資料錯誤';

$_LANG['ucenter_import_username'] = '會員資料導入到 UCenter';
$_LANG['uc_import_notice'] = '提醒：導入會員資料前請暫停各個應用(如Discuz!, SupeSite等)';
$_LANG['uc_members_merge'] = '會員合併方式';
$_LANG['user_startid_intro'] = '<p>此起始會員ID為%s。如原 ID 為 888 的會員將變為 %s+888 的值。</p>';
$_LANG['uc_members_merge_way1'] = '將與UC會員名稱和密碼相同的會員強制為同一會員';
$_LANG['uc_members_merge_way2'] = '將與UC會員名稱和密碼相同的會員不導入UC會員';
$_LANG['start_import'] = '開始導入';
$_LANG['import_user_success'] = '成功將會員資料導入到 UCenter';
$_LANG['uc_points'] = 'UCenter的紅利積點兌換設定需要在UCenter管理後台進行';
$_LANG['uc_set_credits'] = '設定紅利積點兌換方案';
$_LANG['uc_client_not_exists'] = 'uc_client目錄不存在，請先把uc_client目錄上傳到商店根目錄下再進行整合';
$_LANG['uc_client_not_write'] = 'uc_client/data目錄不可寫，請先把uc_client/data目錄權限設定為777';
$_LANG['uc_lang']['credits'][0][0] = '等級積分';
$_LANG['uc_lang']['credits'][0][1] = '';
$_LANG['uc_lang']['credits'][1][0] = '消費紅利積點';
$_LANG['uc_lang']['credits'][1][1] = '';
$_LANG['uc_lang']['exchange'] = 'UCenter紅利積點兌換';

?>