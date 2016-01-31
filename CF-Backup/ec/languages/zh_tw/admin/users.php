<?php

/**
 * ECSHOP 會員帳號管理語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: sunxiaodong $
 * $CHT by: 00992266 @ ECClub.tw $
 * $Id: users.php 15618 2009-02-18 05:31:02Z sunxiaodong $
*/
/* 列表頁面 */
$_LANG['label_user_name'] = '會員名稱';
$_LANG['label_pay_points_gt'] = '會員紅利積點大於';
$_LANG['label_pay_points_lt'] = '會員紅利積點小於';
$_LANG['label_rank_name'] = '會員等級';
$_LANG['all_option'] = '所有等級';

$_LANG['view_order'] = '檢視訂單';
$_LANG['view_deposit'] = '檢視賬目明細';
$_LANG['username'] = '會員名稱';
$_LANG['email'] = '電子郵件信箱';
$_LANG['is_validated'] = '是否已驗證';
$_LANG['reg_date'] = '註冊日期';
$_LANG['button_remove'] = '刪除會員';
$_LANG['users_edit'] = '編輯會員帳號';
$_LANG['goto_list'] = '返回會員帳號列表';
$_LANG['username_empty'] = '會員名稱不能為空！';

/* 表單相關語言項 */
$_LANG['password'] = '登入密碼';
$_LANG['newpass'] = '新密碼';
$_LANG['confirm_password'] = '確認密碼';
$_LANG['question'] = '密碼提示問題';
$_LANG['answer'] = '密碼提示問題答案';
$_LANG['gender'] = '性別';
$_LANG['birthday'] = '出生日期';
$_LANG['sex'][0] = '保密';
$_LANG['sex'][1] = '男';
$_LANG['sex'][2] = '女';
$_LANG['pay_points'] = '消費紅利積點';
$_LANG['rank_points'] = '等級積分';
$_LANG['user_money'] = '可用餘額';
$_LANG['frozen_money'] = '凍結資金';
$_LANG['credit_line'] = '信用額度';
$_LANG['user_rank'] = '會員等級';
$_LANG['not_special_rank'] = '非特殊等級';
$_LANG['view_detail_account'] = '檢視明細';
$_LANG['parent_user'] = '推薦人';
$_LANG['parent_remove'] = '脫離推薦關係';

$_LANG['msn'] = 'MSN';
$_LANG['qq'] = 'QQ';
$_LANG['home_phone'] = '家用電話';
$_LANG['office_phone'] = '公司電話';
$_LANG['mobile_phone'] = '行動電話';

$_LANG['notice_pay_points'] = '消費紅利積點是一種站內貨幣，允許會員在購物時付款一定比例的紅利積點。';
$_LANG['notice_rank_points'] = '等級積分是一種累計的紅利積點，系統根據該紅利積點來判定會員的會員等級。';
$_LANG['notice_user_money'] = '會員在站內預留下的金額';

/* 提示資料 */
$_LANG['username_exists'] = '已經存在一個相同的會員名稱。';
$_LANG['email_exists'] = '該電子郵件信箱已經存在。';
$_LANG['edit_user_failed'] = '修改會員資料失敗。';
$_LANG['invalid_email'] = '輸入不正確的電子郵件信箱。';
$_LANG['update_success'] = '編輯會員資料已。';
$_LANG['remove_confirm'] = '確定刪除該會員帳號嗎？';
$_LANG['remove_order_confirm'] = '該會員帳號已經有訂單存在，刪除該會員帳號的同時將清除訂單資料。<br />確定刪除嗎？';
$_LANG['remove_order'] = '是，我確定刪除會員帳號及其訂單資料';
$_LANG['remove_cancel'] = '不，我不想刪除該會員帳號。';
$_LANG['remove_success'] = '會員帳號 %s 已經刪除成功。';
$_LANG['add_success'] = '會員帳號 %s 已經新增成功。';
$_LANG['batch_remove_success'] = '已刪除 %d 個會員帳號。';
$_LANG['no_select_user'] = '您現在沒有需要刪除的會員！';
$_LANG['register_points'] = '註冊送紅利積點';
$_LANG['username_not_allow'] = '會員名稱不允許註冊';
$_LANG['username_invalid'] = '無效的會員名稱';
$_LANG['email_invalid'] = '無效的email地址';
$_LANG['email_not_allow'] = '郵件不允許';

/* 地址列表 */
$_LANG['address_list'] = '收件地址';
$_LANG['consignee'] = '收件人';
$_LANG['address'] = '地址';
$_LANG['link'] = '聯絡方式';
$_LANG['other'] = '其他';
$_LANG['tel'] = '電話';
$_LANG['mobile'] = '行動電話';
$_LANG['best_time'] = '最佳送貨時間';
$_LANG['sign_building'] = '大樓名稱';

/* JS 語言項 */
$_LANG['js_languages']['no_username'] = '沒有輸入會員名稱。';
$_LANG['js_languages']['invalid_email'] = '沒有輸入電子郵件信箱或者輸入一個無效的電子郵件信箱。';
$_LANG['js_languages']['no_password'] = '沒有輸入密碼。';
$_LANG['js_languages']['no_confirm_password'] = '沒有輸入確認密碼。';
$_LANG['js_languages']['password_not_same'] = '輸入的密碼和確認密碼不一致。';
$_LANG['js_languages']['invalid_pay_points'] = '消費紅利積點數不是一個整數。';
$_LANG['js_languages']['invalid_rank_points'] = '等級積分數不是一個整數。';
$_LANG['js_languages']['password_len_err'] = '新密碼和確認密碼的長度不能小於6';
?>
