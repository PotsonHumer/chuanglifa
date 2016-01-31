<?php

/**
 * ECSHOP 管理中心起始頁語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: zblikai $
 * $CHT by: 00992266 @ ECClub.tw $
 * $Id: goods.php 15595 2009-02-13 07:26:20Z zblikai $
*/

$_LANG['edit_goods'] = '編輯商品資料';
$_LANG['copy_goods'] = '複製商品資料';
$_LANG['continue_add_goods'] = '繼續新增新商品';
$_LANG['back_goods_list'] = '返回商品列表';
$_LANG['add_goods_ok'] = '新增商品成功。';
$_LANG['edit_goods_ok'] = '編輯商品成功。';
$_LANG['trash_goods_ok'] = '把商品放入回收站成功。';
$_LANG['restore_goods_ok'] = '還原商品成功。';
$_LANG['drop_goods_ok'] = '刪除商品成功。';
$_LANG['batch_handle_ok'] = '大量操作成功。';
$_LANG['drop_goods_confirm'] = '確定刪除該商品嗎？';
$_LANG['batch_drop_confirm'] = '徹底刪除商品將刪除與該商品有關的所有資料。\n確定刪除選取的商品嗎？';
$_LANG['trash_goods_confirm'] = '確定將該商品放入回收站嗎？';
$_LANG['batch_trash_confirm'] = '確定將選取的商品放入回收站嗎？';
$_LANG['restore_goods_confirm'] = '確定還原該商品嗎？';
$_LANG['batch_restore_confirm'] = '確定還原選取的商品嗎？';
$_LANG['batch_on_sale_confirm'] = '確定上架選取的商品嗎？';
$_LANG['batch_not_on_sale_confirm'] = '確定將選取的商品下架嗎？';
$_LANG['batch_best_confirm'] = '確定將選取的商品設為精品嗎？';
$_LANG['batch_not_best_confirm'] = '確定將選取的商品取消精品嗎？';
$_LANG['batch_new_confirm'] = '確定將選取的商品設為新品嗎？';
$_LANG['batch_not_new_confirm'] = '確定將選取的商品取消新品嗎？';
$_LANG['batch_hot_confirm'] = '確定將選取的商品設為熱賣嗎？';
$_LANG['batch_not_hot_confirm'] = '確定將選取的商品取消熱賣嗎？';
$_LANG['cannot_found_goods'] = '找不到指定的商品。';

/*------------------------------------------------------ */
//-- 圖片處理相關提示資料
/*------------------------------------------------------ */
$_LANG['no_gd'] = '您的伺服器不支援 GD 或者沒有安裝處理該圖片類型的進階庫。';
$_LANG['img_not_exists'] = '找不到原始圖片，建立縮圖失敗。';
$_LANG['img_invalid'] = '建立縮圖失敗，因為您上傳一個無效的圖片檔案。';
$_LANG['create_dir_failed'] = 'images 資料夾不可寫，建立縮圖失敗。';
$_LANG['safe_mode_warning'] = '您的伺服器運行在安全模式下，而且 %s 目錄不存在。您需要先行建立該目錄才能上傳圖片。';
$_LANG['not_writable_warning'] = '目錄 %s 不可寫，您需要將該目錄設為可寫才能上傳圖片。';

/*------------------------------------------------------ */
//-- 商品列表
/*------------------------------------------------------ */
$_LANG['goods_cat'] = '所有分類';
$_LANG['goods_brand'] = '所有品牌';
$_LANG['intro_type'] = '全部';
$_LANG['intro_type'] = '推薦';
$_LANG['keyword'] = '關鍵字';
$_LANG['is_best'] = '精品';
$_LANG['is_new'] = '新品';
$_LANG['is_hot'] = '熱賣';
$_LANG['is_promote'] = '特價';
$_LANG['all_type'] = '全部推薦';
$_LANG['sort_order'] = '推薦排序';

$_LANG['goods_name'] = '商品名稱';
$_LANG['goods_sn'] = '貨號';
$_LANG['shop_price'] = '價格';
$_LANG['is_on_sale'] = '上架';
$_LANG['goods_number'] = '庫存';

$_LANG['copy'] = '複製';

$_LANG['integral'] = '紅利積點額度';
$_LANG['on_sale'] = '上架';
$_LANG['not_on_sale'] = '下架';
$_LANG['best'] = '精品';
$_LANG['not_best'] = '取消精品';
$_LANG['new'] = '新品';
$_LANG['not_new'] = '取消新品';
$_LANG['hot'] = '熱賣';
$_LANG['not_hot'] = '取消熱賣';
$_LANG['move_to'] = '轉移到分類';

// ajax
$_LANG['goods_name_null'] = '請輸入商品名稱';
$_LANG['goods_sn_null'] = '請輸入貨號';
$_LANG['shop_price_not_number'] = '價格不是數字';
$_LANG['shop_price_invalid'] = '您輸入一個不正確的市場價格。';
$_LANG['goods_sn_exists'] = '您輸入的貨號已存在，請換一個';

/*------------------------------------------------------ */
//-- 新增/編輯商品資料
/*------------------------------------------------------ */
$_LANG['tab_general'] = '一般資料';
$_LANG['tab_detail'] = '詳細內容';
$_LANG['tab_mix'] = '其他資料';
$_LANG['tab_properties'] = '商品規格';
$_LANG['tab_gallery'] = '商品相簿';
$_LANG['tab_linkgoods'] = '關聯商品';
$_LANG['tab_groupgoods'] = '配件';
$_LANG['tab_article'] = '關聯文章';

$_LANG['lab_goods_name'] = '商品名稱：';
$_LANG['lab_goods_sn'] = '商品貨號：';
$_LANG['lab_goods_cat'] = '商品分類：';
$_LANG['lab_other_cat'] = '進階分類：';
$_LANG['lab_goods_brand'] = '商品品牌：';
$_LANG['lab_shop_price'] = '本店售價：';
$_LANG['lab_market_price'] = '市場售價：';
$_LANG['lab_user_price'] = '會員價格：';
$_LANG['lab_promote_price'] = '促銷價：';
$_LANG['lab_promote_date'] = '促銷日期：';
$_LANG['lab_picture'] = '上傳商品圖片：';
$_LANG['lab_thumb'] = '上傳商品縮圖：';
$_LANG['auto_thumb'] = '自動建立商品縮圖';
$_LANG['lab_keywords'] = '商品關鍵字：';
$_LANG['lab_goods_brief'] = '商品簡單描述：';
$_LANG['lab_seller_note'] = '商家備註：';
$_LANG['lab_picture_url'] = '商品圖片外部連結';
$_LANG['lab_thumb_url'] = '商品縮圖外部連結';

$_LANG['lab_goods_weight'] = '商品重量：';
$_LANG['unit_g'] = '克';
$_LANG['unit_kg'] = '公斤';
$_LANG['lab_goods_number'] = '商品庫存數量：';
$_LANG['lab_warn_number'] = '庫存警告數量：';
$_LANG['lab_integral'] = '積點購買額度：';
$_LANG['lab_give_integral'] = '贈送積分數：';
$_LANG['lab_rank_integral'] = '贈送等級積分數：';
$_LANG['lab_intro'] = '加入推薦：';
$_LANG['lab_is_on_sale'] = '上架：';
$_LANG['lab_is_alone_sale'] = '能作為普通商品銷售：';

$_LANG['compute_by_mp'] = '依市場價格計算';

$_LANG['notice_goods_sn'] = '如果您不輸入商品貨號，系統將自動建立一組貨號。';
$_LANG['notice_integral'] = '購買該商品時最多可以使用多少錢的積點';
$_LANG['notice_give_integral'] = '購買該商品時贈送消費紅利積點數,-1表示按商品價格贈送';
$_LANG['notice_rank_integral'] = '購買該商品時贈送等級積分數,-1表示按商品價格贈送';
$_LANG['notice_seller_note'] = '僅供商家自己看的資料';
$_LANG['notice_keywords'] = '用空格分隔';
$_LANG['notice_user_price'] = '會員價格為-1時表示會員價格按會員等級折扣率計算。你也可以為每個等級指定一個固定價格';

$_LANG['on_sale_desc'] = '打勾表示允許銷售，否則不允許銷售。';
$_LANG['alone_sale'] = '打勾表示能作為普通商品銷售，否則只能作為配件或贈品銷售。';

$_LANG['invalid_goods_img'] = '商品圖片格式不正確！';
$_LANG['invalid_goods_thumb'] = '商品縮圖格式不正確！';
$_LANG['invalid_img_url'] = '商品相簿中第%s個圖片格式不正確!';

$_LANG['goods_img_too_big'] = '商品圖片檔案太大（最大值：%s），無法上傳。';
$_LANG['goods_thumb_too_big'] = '商品縮圖檔案太大（最大值：%s），無法上傳。';
$_LANG['img_url_too_big'] = '商品相簿中第%s個圖片檔案太大（最大值：%s），無法上傳。';

$_LANG['integral_market_price'] = '取整數';
$_LANG['upload_images'] = '上傳圖片';
$_LANG['spec_price'] = '規格加價';
$_LANG['drop_img_confirm'] = '您確定刪除該圖片嗎？';

$_LANG['select_font'] = '字體樣式';
$_LANG['font_styles'] = array('strong' => '加粗', 'em' => '斜體', 'u' => '下劃線', 'strike' => '刪除線');

$_LANG['rapid_add_cat'] = '新增分類';
$_LANG['rapid_add_brand'] = '新增品牌';
$_LANG['category_manage'] = '分類管理';
$_LANG['brand_manage'] = '品牌管理';
$_LANG['hide'] = '隱藏';

$_LANG['lab_volume_price'] = '商品優惠價格：';
$_LANG['volume_number'] = '優惠數量';
$_LANG['volume_price'] = '優惠價格';
$_LANG['notice_volume_price'] = '購買數量達到優惠數量時享受的優惠價格';
$_LANG['volume_number_continuous'] = '優惠數量重複！';

/*------------------------------------------------------ */
//-- 關聯商品
/*------------------------------------------------------ */

$_LANG['all_goods'] = '可選商品';
$_LANG['link_goods'] = '跟該商品關聯的商品';
$_LANG['single'] = '單向關聯';
$_LANG['double'] = '雙向關聯';
$_LANG['all_article'] = '可選文章';
$_LANG['goods_article'] = '跟該商品關聯的文章';
$_LANG['top_cat'] = '最上層分類';

/*------------------------------------------------------ */
//-- 組合商品
/*------------------------------------------------------ */

$_LANG['group_goods'] = '該商品的配件';
$_LANG['price'] = '價格';

/*------------------------------------------------------ */
//-- 商品相簿
/*------------------------------------------------------ */

$_LANG['img_desc'] = '圖片描述';
$_LANG['img_url'] = '上傳檔案';

/*------------------------------------------------------ */
//-- 關聯文章
/*------------------------------------------------------ */
$_LANG['article_title'] = '文章標題';

$_LANG['goods_not_exist'] = '該商品不存在';
$_LANG['goods_not_in_recycle_bin'] = '該商品尚未放入回收站，不能刪除';

$_LANG['js_languages']['goods_name_not_null'] = '請輸入商品名稱。';
$_LANG['js_languages']['goods_cat_not_null'] = '請選擇商品分類。';
$_LANG['js_languages']['category_cat_not_null'] = '請輸入分類名稱';
$_LANG['js_languages']['brand_cat_not_null'] = '請輸入品牌名稱';
$_LANG['js_languages']['goods_cat_not_leaf'] = '您選擇的商品分類不是底層分類，請選擇底層分類。';
$_LANG['js_languages']['shop_price_not_null'] = '請輸入本店售價。';
$_LANG['js_languages']['shop_price_not_number'] = '本店售價請填入數字。';

$_LANG['js_languages']['select_please'] = '請選擇...';
$_LANG['js_languages']['button_add'] = '新增';
$_LANG['js_languages']['button_del'] = '刪除';
$_LANG['js_languages']['spec_value_not_null'] = '規格不能為空';
$_LANG['js_languages']['spec_price_not_number'] = '加價不是數字';
$_LANG['js_languages']['market_price_not_number'] = '市場價格請填入數字';
$_LANG['js_languages']['goods_number_not_int'] = '商品庫存需為整數';
$_LANG['js_languages']['warn_number_not_int'] = '庫存警告需為整數';
$_LANG['js_languages']['promote_not_lt'] = '促銷開始日期不能晚於結束日期';
$_LANG['js_languages']['promote_start_not_null'] = '請選擇促銷開始時間';
$_LANG['js_languages']['promote_end_not_null'] = '請選擇促銷結束時間';

$_LANG['js_languages']['drop_img_confirm'] = '您確定刪除該圖片嗎？';
$_LANG['js_languages']['batch_no_on_sale'] = '您確定將選擇的商品下架嗎？';
$_LANG['js_languages']['batch_trash_confirm'] = '您確定將選取的商品放入回收站嗎？';
$_LANG['js_languages']['go_category_page'] = '本頁資料將丟失，確認要去商品分類頁新增分類嗎？';
$_LANG['js_languages']['go_brand_page'] = '本頁資料將丟失，確認要去商品品牌頁新增品牌嗎？';

$_LANG['js_languages']['volume_num_not_null'] = '請輸入優惠數量';
$_LANG['js_languages']['volume_num_not_number'] = '請輸入數字';
$_LANG['js_languages']['volume_price_not_null'] = '請輸入優惠價格';
$_LANG['js_languages']['volume_price_not_number'] = '請輸入數字';

/* 虛擬商品 */
$_LANG['card'] = '檢視虛擬商品資料';
$_LANG['replenish'] = '補貨';
$_LANG['batch_card_add'] = '批次補貨';

$_LANG['goods_number_error'] = '商品庫存數量錯誤';

?>
