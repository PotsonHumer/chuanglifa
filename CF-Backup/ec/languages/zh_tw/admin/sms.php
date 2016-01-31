<?php
/**
 * ECSHOP 簡訊模塊語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $Id: sms.php 15086 2008-10-27 06:21:49Z testyang $
*/

/* 導航條 */
$_LANG['register_sms'] = '註冊或啟用簡訊帳號';

/* 註冊和啟用簡訊功能 */
$_LANG['email'] = '電子郵件信箱';
$_LANG['password'] = '登入密碼';
$_LANG['domain'] = '商店網址';
$_LANG['register_new'] = '註冊新帳號';
$_LANG['enable_old'] = '啟用已有帳號';

/* 簡訊服務資料 */
$_LANG['sms_user_name'] = '會員名：';
$_LANG['sms_password'] = '密碼：';
$_LANG['sms_domain'] = '網址：';
$_LANG['sms_num'] = '簡訊服務號：';
$_LANG['sms_count'] = '發送簡訊次數：';
$_LANG['sms_total_money'] = '總共花費金額：';
$_LANG['sms_balance'] = '餘額：';
$_LANG['sms_last_request'] = '最後一次請求時間：';
$_LANG['disable'] = '停止簡訊服務';

/* 發送簡訊 */
$_LANG['phone'] = '行動電話';
$_LANG['phone_notice'] = '多個手機號碼用半形逗號分開';
$_LANG['msg'] = '消息內容';
$_LANG['msg_notice'] = '最長250字元';
$_LANG['send_date'] = '定時發送時間';
$_LANG['send_date_notice'] = '格式為YYYY-MM-DD HH:II。為空表示立即發送。';
$_LANG['back_send_history'] = '返回發送歷史列表';
$_LANG['back_charge_history'] = '返回儲值歷史列表';

/* 記錄查詢界面 */
$_LANG['start_date'] = '開始日期';
$_LANG['date_notice'] = '格式為YYYY-MM-DD。可為空。';
$_LANG['end_date'] = '結束日期';
$_LANG['page_size'] = '每頁顯示數量';
$_LANG['page_size_notice'] = '可為空，表示每頁顯示20筆記錄';
$_LANG['page'] = '頁數';
$_LANG['page_notice'] = '可為空，表示顯示1頁';
$_LANG['charge'] = '請輸入您想要儲值的金額';

/* 動作確認資料 */
$_LANG['history_query_error'] = '很抱歉，在查詢過程中發生錯誤。';
$_LANG['enable_ok'] = '恭喜，您已成功啟用簡訊服務！';
$_LANG['enable_error'] = '很抱歉，您啟用簡訊服務失敗。';
$_LANG['disable_ok'] = '您已停用簡訊服務。';
$_LANG['disable_error'] = '停用簡訊服務失敗。';
$_LANG['register_ok'] = '恭喜，您已成功註冊簡訊服務！';
$_LANG['register_error'] = '很抱歉，您註冊簡訊服務失敗。';
$_LANG['send_ok'] = '恭喜，您的簡訊已發送！';
$_LANG['send_error'] = '很抱歉，在發送簡訊過程中發生錯誤。';
$_LANG['error_no'] = '錯誤標識';
$_LANG['error_msg'] = '錯誤描述';
$_LANG['empty_info'] = '您的簡訊服務資料為空。';

/* 儲值記錄 */
$_LANG['order_id'] = '訂單編號';
$_LANG['money'] = '儲值金額';
$_LANG['log_date'] = '儲值日期';

/* 發送記錄 */
$_LANG['sent_phones'] = '發送行動電話';
$_LANG['content'] = '發送內容';
$_LANG['charge_num'] = '計費條數';
$_LANG['sent_date'] = '發送日期';
$_LANG['send_status'] = '發送狀態';
$_LANG['status'][0] = '失敗';
$_LANG['status'][1] = '成功';

/* 提示 */
$_LANG['test_now'] = '<span style="color:red;"></span>';
$_LANG['msg_price'] = '<span style="color:green;">簡訊每筆1元(台幣)</span>';

/* API返回的錯誤資料 */
//--註冊
$_LANG['api_errors']['register'][1] = '網址不能為空。';
$_LANG['api_errors']['register'][2] = 'email填寫不正確。';
$_LANG['api_errors']['register'][3] = '使用者名已存在。';
$_LANG['api_errors']['register'][4] = '未知錯誤。';
$_LANG['api_errors']['register'][5] = '介接錯誤。';
//--取得儲值金
$_LANG['api_errors']['get_balance'][1] = '會員名稱密碼不正確。';
$_LANG['api_errors']['get_balance'][2] = '會員被禁用。';
//--發送簡訊
$_LANG['api_errors']['send'][1] = '會員名稱密碼不正確。';
$_LANG['api_errors']['send'][2] = '簡訊內容過長。';
$_LANG['api_errors']['send'][3] = '發送日期應晚於目前時間。';
$_LANG['api_errors']['send'][4] = '錯誤的號碼。';
$_LANG['api_errors']['send'][5] = '帳戶餘額不足。';
$_LANG['api_errors']['send'][6] = '帳戶已被停用。';
$_LANG['api_errors']['send'][7] = '介接錯誤。';
//--歷史記錄
$_LANG['api_errors']['get_history'][1] = '會員名稱密碼不正確。';
$_LANG['api_errors']['get_history'][2] = '查無記錄。';
//--會員驗證
$_LANG['api_errors']['auth'][1] = '密碼錯誤。';
$_LANG['api_errors']['auth'][2] = '會員不存在。';

/* 會員伺服器檢測到的錯誤資料 */
$_LANG['server_errors'][1] = '註冊資料無效。';//ERROR_INVALID_REGISTER_INFO
$_LANG['server_errors'][2] = '啟用資料無效。';//ERROR_INVALID_ENABLE_INFO
$_LANG['server_errors'][3] = '發送的資料有誤。';//ERROR_INVALID_SEND_INFO
$_LANG['server_errors'][4] = '填寫的查詢資料有誤。';//ERROR_INVALID_HISTORY_QUERY
$_LANG['server_errors'][5] = '無效的身份資料。';//ERROR_INVALID_PASSPORT
$_LANG['server_errors'][6] = 'URL不對。';//ERROR_INVALID_URL
$_LANG['server_errors'][7] = 'HTTP回應為空。';//ERROR_EMPTY_RESPONSE
$_LANG['server_errors'][8] = '無效的XML檔案。';//ERROR_INVALID_XML_FILE
$_LANG['server_errors'][9] = '無效的節點名字。';//ERROR_INVALID_NODE_NAME
$_LANG['server_errors'][10] = '存儲失敗。';//ERROR_CANT_STORE

/* 客戶端JS語言項 */
//--註冊或啟用
$_LANG['js_languages']['password_empty_error'] = '密碼不能為空。';
$_LANG['js_languages']['username_empty_error'] = '會員名稱不能為空。';
$_LANG['js_languages']['username_format_error'] = '會員名稱格式不對。';
$_LANG['js_languages']['domain_empty_error'] = '網址不能為空。';
$_LANG['js_languages']['domain_format_error'] = '網址格式錯誤。';
//--發送
$_LANG['js_languages']['phone_empty_error'] = '請填寫行動電話號碼碼。';
$_LANG['js_languages']['phone_format_error'] = '行動電話格式不對。';
$_LANG['js_languages']['msg_empty_error'] = '請填寫消息內容。';
$_LANG['js_languages']['send_date_format_error'] = '定時發送時間格式不對。';
//--歷史記錄
$_LANG['js_languages']['start_date_format_error'] = '開始日期格式不對。';
$_LANG['js_languages']['end_date_format_error'] = '結束日期格式不對。';
//--儲值
$_LANG['js_languages']['money_empty_error'] = '請輸入您要儲值的金額。';
$_LANG['js_languages']['money_format_error'] = '金額格式不對。';

?>