<?php

/**
 * ECSHOP 商品批次上傳、修改語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: zblikai $
 * $CHT by: 00992266 @ ECClub.tw $
 * $Id: goods_batch.php 15560 2009-01-13 10:06:15Z zblikai $
 */

$_LANG['select_method'] = '選擇商品的方式：';
$_LANG['by_cat'] = '根據商品分類、品牌';
$_LANG['by_sn'] = '根據商品貨號';
$_LANG['select_cat'] = '選擇商品分類：';
$_LANG['select_brand'] = '選擇商品品牌：';
$_LANG['goods_list'] = '商品列表：';
$_LANG['src_list'] = '待選列表：';
$_LANG['dest_list'] = '選擇列表：';
$_LANG['input_sn'] = '輸入商品貨號：<br />（每行一個）';
$_LANG['edit_method'] = '編輯方式：';
$_LANG['edit_each'] = '逐一編輯';
$_LANG['edit_all'] = '統一編輯';
$_LANG['go_edit'] = '進入編輯';

$_LANG['notice_edit'] = '會員價格為-1表示會員價格將根據會員等級折扣比例計算';

$_LANG['goods_class'] = '商品類別';
$_LANG['g_class'][G_REAL] = '實體商品';
$_LANG['g_class'][G_CARD] = '虛擬商品';

$_LANG['goods_sn'] = '貨號';
$_LANG['goods_name'] = '商品名稱';
$_LANG['market_price'] = '市場價格';
$_LANG['shop_price'] = '本店價格';
$_LANG['integral'] = '使用積點購買';
$_LANG['give_integral'] = '贈送紅利積點';
$_LANG['goods_number'] = '庫存';
$_LANG['brand'] = '品牌';

$_LANG['batch_edit_ok'] = '批次修改成功';

$_LANG['goods_cat'] = '所屬分類：';
$_LANG['csv_file'] = '上傳批次csv檔案：';
$_LANG['notice_file'] = '（CSV檔案中一次上傳商品數量最好不要超過1000，CSV檔案大小最好不要超過500K.）';
$_LANG['file_charset'] = '檔案編碼：';
$_LANG['download_file'] = '下載批次CSV檔案（%s）';
$_LANG['use_help'] = '使用說明：' .
        '<ol>' .
          '<li>根據使用習慣，下載相應語言的csv檔案，例如中國內地會員下載簡體中文語言的檔案，港台會員下載繁體語言的檔案；</li>' .
          '<li>填寫csv檔案，可以使用excel或文字編輯器打開csv檔案；<br />' .
              '碰到「是否精品」之類，填寫數字0或者1，0代表「否」，1代表「是」；<br />' .
              '商品圖片和商品縮圖請填寫帶路徑的圖片檔案名，其中路徑是相對於 [根目錄]/images/ 的路徑，例如圖片路徑為[根目錄]/images/200610/abc.jpg，只要填寫 200610/abc.jpg 即可；<br />' .
          '<li>將填寫的商品圖片和商品縮圖上傳到相應目錄，例如：[根目錄]/images/200610/；</li>' .
              '<font style="color:#FE596A;">請首先上傳商品圖片和商品縮圖後再上傳csv文件，否則圖片無法處理。</font></li>' .
          '<li>選擇所上傳商品的分類以及檔案編碼，上傳csv檔案</li>' .
        '</ol>';

$_LANG['js_languages']['please_select_goods'] = '請選擇商品';
$_LANG['js_languages']['please_input_sn'] = '請輸入商品貨號';
$_LANG['js_languages']['goods_cat_not_leaf'] = '請選擇底層分類';
$_LANG['js_languages']['please_select_cat'] = '請選擇所屬分類';
$_LANG['js_languages']['please_upload_file'] = '請上傳批次csv檔案';

// 批次上傳商品的字段
$_LANG['upload_goods']['goods_name'] = '商品名稱';
$_LANG['upload_goods']['goods_sn'] = '商品貨號';
$_LANG['upload_goods']['brand_name'] = '商品品牌';   // 需要轉換成brand_id
$_LANG['upload_goods']['market_price'] = '市場售價';
$_LANG['upload_goods']['shop_price'] = '本店售價';
$_LANG['upload_goods']['integral'] = '紅利積點購買額度';
$_LANG['upload_goods']['original_img'] = '商品原始圖';
$_LANG['upload_goods']['goods_img'] = '商品圖片';
$_LANG['upload_goods']['goods_thumb'] = '商品縮圖';
$_LANG['upload_goods']['keywords'] = '商品關鍵字';
$_LANG['upload_goods']['goods_brief'] = '簡單描述';
$_LANG['upload_goods']['goods_desc'] = '詳細內容';
$_LANG['upload_goods']['goods_weight'] = '商品重量（kg）';
$_LANG['upload_goods']['goods_number'] = '庫存數量';
$_LANG['upload_goods']['warn_number'] = '庫存警告數量';
$_LANG['upload_goods']['is_best'] = '是否精品';
$_LANG['upload_goods']['is_new'] = '是否新品';
$_LANG['upload_goods']['is_hot'] = '是否熱賣';
$_LANG['upload_goods']['is_on_sale'] = '是否上架';
$_LANG['upload_goods']['is_alone_sale'] = '能否作為普通商品銷售';
$_LANG['upload_goods']['is_real'] = '是否為實體商品';

$_LANG['batch_upload_ok'] = '批次上傳成功';
$_LANG['goods_upload_confirm'] = '批次上傳確認';
?>