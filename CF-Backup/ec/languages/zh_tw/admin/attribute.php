<?php
/**
 * ECSHOP 商品類型管理語言檔案
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $Id: attribute.php 15086 2008-10-27 06:21:49Z testyang $
*/

/* 列表 */
$_LANG['by_goods_type'] = '按商品類型顯示：';
$_LANG['all_goods_type'] = '所有商品類型';

$_LANG['attr_id'] = '編號';
$_LANG['cat_id'] = '商品類型';
$_LANG['attr_name'] = '規格名稱';
$_LANG['attr_input_type'] = '規格值的輸入方式';
$_LANG['attr_values'] = '可選值列表';
$_LANG['attr_type'] = '購買商品時是否需要選擇該規格的值';

$_LANG['value_attr_input_type'][ATTR_TEXT] = '手工輸入';
$_LANG['value_attr_input_type'][ATTR_OPTIONAL] = '從列表中選擇';
$_LANG['value_attr_input_type'][ATTR_TEXTAREA] = '多行文字區塊';

$_LANG['drop_confirm'] = '確定刪除該規格嗎？';

/* 新增/編輯 */
$_LANG['label_attr_name']  = '規格名稱：';
$_LANG['label_cat_id']     = '所屬商品類型：';
$_LANG['label_attr_index'] = '能否進行搜尋：';
$_LANG['label_is_linked']  = '相同規格值的商品是否互相連結？';
$_LANG['no_index']         = '不需要搜尋';
$_LANG['keywords_index']   = '關鍵字搜尋';
$_LANG['range_index']      = '範圍搜尋';
$_LANG['note_attr_index']  = '不需要該規格成為搜尋商品條件的情況下，請選擇不需要搜尋，需要該規格進行關鍵字搜尋商品時選擇關鍵字搜尋，如果該規格搜尋時希望是指定某個範圍時，選擇範圍搜尋。';
$_LANG['label_attr_input_type'] = '該規格值的輸入方式：';
$_LANG['text']      = '手工輸入';
$_LANG['select']    = '從下面的列表中選擇（一行代表一個可選值）';
$_LANG['text_area'] = '多行文字方塊';
$_LANG['label_attr_values'] = '可選擇列表：';
$_LANG['label_attr_group']  = '規格分組：';
$_LANG['label_attr_type']   = '規格是否可選';
$_LANG['note_attr_type']    = '選擇「是」時，可以對商品該規格設置多個值，同時還能對不同規格值指定不同的價格加價，會員購買商品時需要選定具體的規格值。選擇「否」時，商品的該規格值只能設置一個值，會員只能檢視該值。';
$_LANG['attr_type_values'][0] = '唯一規格';
$_LANG['attr_type_values'][1] = '單選規格';
$_LANG['attr_type_values'][2] = '複選規格';


$_LANG['add_next']  = '新增下一個規格';
$_LANG['back_list'] = '返回規格列表';

$_LANG['add_ok']  = '新增規格 [%s] 成功。';
$_LANG['edit_ok'] = '編輯規格 [%s] 成功。';

/* 提示訊息 */
$_LANG['name_exist'] = '該規格名稱已存在，請您換一個名稱。';
$_LANG['drop_confirm'] = '確定刪除該規格嗎？';
$_LANG['notice_drop_confirm'] = '已經有%s個商品使用該規格，您確定刪除該規格嗎？';
$_LANG['name_not_null'] = '規格名稱不能為空。';

$_LANG['no_select_arrt'] = '您沒有選擇需要刪除的商品規格';
$_LANG['drop_ok'] = '成功刪除了 %d 個商品規格';

$_LANG['js_languages']['name_not_null'] = '請您輸入規格名稱。';
$_LANG['js_languages']['values_not_null'] = '請您輸入該規格的可選值。';
$_LANG['js_languages']['cat_id_not_null'] = '請您選擇該規格所屬的商品類型。';

?>