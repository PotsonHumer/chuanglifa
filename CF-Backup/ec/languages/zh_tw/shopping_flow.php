<?php

/**
 * ECSHOP 購物流程相關語言
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: zblikai $
 * $CHT by 00992266 @ ECClub.tw $
 * $Id: shopping_flow.php 15487 2008-12-22 09:32:06Z zblikai $
*/

$_LANG['flow_login_register']['username_not_null'] = '請輸入會員名稱。';
$_LANG['flow_login_register']['username_invalid'] = '您輸入一個無效的會員名稱。';
$_LANG['flow_login_register']['password_not_null'] = '請輸入密碼。';
$_LANG['flow_login_register']['email_not_null'] = '請輸入電子郵件。';
$_LANG['flow_login_register']['email_invalid'] = '您輸入的電子郵件不正確。';
$_LANG['flow_login_register']['password_not_same'] = '您輸入的密碼和確認密碼不一致。';
$_LANG['flow_login_register']['password_lt_six'] = '密碼不能小於6個字符。';

$_LANG['regist_success'] = "恭喜您，%s 帳號註冊成功!";
$_LANG['login_success'] = '恭喜！您已登入本站！';

/* 購物車 */
$_LANG['update_cart'] = '更新購物車';
$_LANG['back_to_cart'] = '返回購物車';
$_LANG['update_cart_notice'] = '購物車更新成功，請重新選擇您需要的贈品。';
$_LANG['direct_shopping'] = '不打算登入，直接購買';
$_LANG['goods_not_exists'] = '很抱歉，此商品不存在';
$_LANG['drop_goods_confirm'] = '您確定將該商品移出購物車嗎？';
$_LANG['goods_number_not_int'] = '請輸入正確的商品數量。';
$_LANG['stock_insufficiency'] = '很抱歉，您選擇的商品 %s 目前庫存數量僅剩 %d，您最多只能購買 %d 件。';
$_LANG['shopping_flow'] = '購物流程';
$_LANG['username_exists'] = '您輸入的會員名稱已存在，請換一個試試。';
$_LANG['email_exists'] = '您輸入的電子郵件已存在，請換一個試試。';
$_LANG['surplus_not_enough'] = '您使用的金額不能超過您現有的儲值金餘額。';
$_LANG['integral_not_enough'] = '您使用的紅利積點不能超過您現有的紅利積點。';
$_LANG['integral_too_much'] = "您使用的紅利積點不能超過%d";
$_LANG['invalid_bonus'] = "您選擇的折價券並不存在。";
$_LANG['no_goods_in_cart'] = '您的購物車中沒有商品！';
$_LANG['not_submit_order'] = '您參與本次團購商品的訂單已送出，請勿重複操作！';
$_LANG['pay_success'] = '付款完成，我們將儘速為您出貨。';
$_LANG['pay_fail'] = '付款失敗，請與我們連絡。';
$_LANG['pay_disabled'] = '您選擇的付款方式已停用。';
$_LANG['pay_invalid'] = '您選擇一個無效的付款方式。該付款方式不存在或者已停用。請立即和我們取得聯絡。';
$_LANG['flow_no_shipping'] = '請選擇配送方式。';
$_LANG['flow_no_payment'] = '請選擇付款方式。';
$_LANG['pay_not_exist'] = '該付款方式不存在。';
$_LANG['storage_short'] = '庫存不足';
$_LANG['subtotal'] = '小計';
$_LANG['accessories'] = '配件';
$_LANG['largess'] = '贈品';
$_LANG['shopping_money'] = '購物金額小計 %s';
$_LANG['than_market_price'] = '比市場價格 %s 節省 %s (%s)';
$_LANG['your_discount'] = '根據優惠活動<a href="activity.php"><font color=red>%s</font></a>，您可以享受折扣 %s';
$_LANG['no'] = '無';
$_LANG['not_support_virtual_goods'] = '購物車中存在虛擬商品,請登入後購買';
$_LANG['not_support_insure'] = '不能使用保值方式';
$_LANG['clear_cart'] = '清空購物車';
$_LANG['drop_to_collect'] = '加入我的最愛';
$_LANG['password_js']['show_div_text'] = '請重新整理您的購物車';
$_LANG['password_js']['show_div_exit'] = '關閉';
$_LANG['goods_fittings'] = '商品相關配件';
$_LANG['parent_name'] = '相關商品：';
$_LANG['remark_package'] = '組合包';

/* 優惠活動 */
$_LANG['favourable_name'] = '活動名稱：';
$_LANG['favourable_period'] = '優惠期限：';
$_LANG['favourable_range'] = '優惠範圍：';
$_LANG['far_ext'][FAR_ALL] = '全部商品';
$_LANG['far_ext'][FAR_BRAND] = '以下品牌';
$_LANG['far_ext'][FAR_CATEGORY] = '以下分類';
$_LANG['far_ext'][FAR_GOODS] = '以下商品';
$_LANG['favourable_amount'] = '價格區間：';
$_LANG['favourable_type'] = '優惠方式：';
$_LANG['fat_ext'][FAT_DISCOUNT] = '享受 %d%% 的折扣';
$_LANG['fat_ext'][FAT_GOODS] = '從以下贈品（特惠品）中選擇 %d 個（0表示不限制數量）';
$_LANG['fat_ext'][FAT_PRICE] = '直接折抵現金 %d';

$_LANG['favourable_not_exist'] = '無此優惠活動';
$_LANG['favourable_not_available'] = '您無法享受該優惠';
$_LANG['favourable_used'] = '該項優惠已加入購物車';
$_LANG['pls_select_gift'] = '請選擇贈品（特惠品）';
$_LANG['gift_count_exceed'] = '您選擇的贈品（特惠品）數量超過上限';
$_LANG['gift_in_cart'] = '您選擇的贈品（特惠品）已經在購物車中：%s';
$_LANG['label_favourable'] = '優惠活動';
$_LANG['label_collection'] = '我的最愛';
$_LANG['collect_to_flow'] = '立即購買';

/* 登入註冊 */
$_LANG['forthwith_login'] = '登入';
$_LANG['forthwith_register'] = '註冊新會員';
$_LANG['signin_failed'] = '很抱歉，登入失敗，請檢查您的會員名稱和密碼是否正確';
$_LANG['gift_remainder'] = '說明：在您登入或註冊後，請到購物車頁面重新選擇贈品。';

/* 收件人資料 */
$_LANG['flow_js']['consignee_not_null'] = '收件人姓名不能為空！';
$_LANG['flow_js']['country_not_null'] = '請選擇國家！';
$_LANG['flow_js']['province_not_null'] = '請選擇地區！';
$_LANG['flow_js']['city_not_null'] = '請選擇縣市！';
$_LANG['flow_js']['district_not_null'] = '請選擇區域！';
$_LANG['flow_js']['invalid_email'] = '信箱格式錯誤。';
$_LANG['flow_js']['address_not_null'] = '請填寫詳細地址！';
$_LANG['flow_js']['tele_not_null'] = '請填入聯絡電話！';
$_LANG['flow_js']['shipping_not_null'] = '請選擇配送方式！';
$_LANG['flow_js']['payment_not_null'] = '請選擇付款方式！';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = '電話號碼不有效的號碼';
$_LANG['flow_js']['zip_not_num'] = '郵遞區號只能填寫數字';
$_LANG['flow_js']['mobile_invaild'] = '行動電話格式錯誤';

$_LANG['new_consignee_address'] = '新收件地址';
$_LANG['consignee_address'] = '收件地址';
$_LANG['consignee_name'] = '收件人姓名';
$_LANG['country_province'] = '配送區域';
$_LANG['please_select'] = '請選擇';
$_LANG['city_district'] = '城市/地區';
$_LANG['email_address'] = '電子郵件';
$_LANG['detailed_address'] = '詳細地址';
$_LANG['postalcode'] = '郵遞區號';
$_LANG['phone'] = '電話';
$_LANG['mobile'] = '行動電話';
$_LANG['backup_phone'] = '行動電話';
$_LANG['sign_building'] = '大樓名稱';
$_LANG['deliver_goods_time'] = '最佳送貨時間';
$_LANG['default'] = '預設';
$_LANG['default_address'] = '預設地址';
$_LANG['confirm_submit'] = '確認送出';
$_LANG['confirm_edit'] = '確認修改';
$_LANG['country'] = '國家';
$_LANG['province'] = '區域';
$_LANG['city'] = '縣/市';
$_LANG['area'] = '鄉鎮市區';
$_LANG['consignee_add'] = '新增新收件地址';
$_LANG['shipping_address'] = '配送至這個地址';
$_LANG['address_amount'] = '收件地址最高只能設定三個';
$_LANG['not_fount_consignee'] = '很抱歉，您選擇的收件地址不存在。';

/*------------------------------------------------------ */
//-- 訂單送出
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = '您購買的商品沒有達到本店的最低限購金額 %s ，不能送出訂單。';
$_LANG['balance_not_enough'] = '您的儲值金不足以支付整筆訂單，請選擇其他付款方式';
$_LANG['select_shipping'] = '您選擇的配送方式為';
$_LANG['select_payment'] = '您選擇的付款方式為';
$_LANG['order_amount'] = '您的應付款金額為';
$_LANG['remember_order_number'] = '感謝您的購買！您的訂單已送出，請記下您的訂單編號以供日後查詢。';
$_LANG['back_home'] = '<a href="index.php">回首頁</a>';
$_LANG['goto_user_center'] = '<a href="user.php">會員中心</a>';
$_LANG['order_submit_back'] = '您可以 %s 或前往 %s';

$_LANG['order_placed_sms'] = "您有新訂單.收件人:%s 電話:%s";
$_LANG['sms_paid'] = '已付款';

$_LANG['notice_gb_order_amount'] = '（備註：團購如果有保證金，第一次只需支付保證金和相應的付款費用）';

$_LANG['pay_order'] = '立即付款 %s';
$_LANG['validate_bonus'] = '使用折價券';
$_LANG['input_bonus_no'] = '或輸入折價券編號';
$_LANG['select_bonus'] = '選擇已有折價券';
$_LANG['bonus_sn_error'] = '折價券編號不正確';
$_LANG['bonus_min_amount_error'] = '訂單商品金額沒有達到使用該折價券的最低金額 %s';
$_LANG['bonus_is_ok'] = '折價券可以使用，為您折抵 %s';


$_LANG['shopping_myship'] = '運費試算';
$_LANG['shopping_activity'] = '活動一覽';
?>
