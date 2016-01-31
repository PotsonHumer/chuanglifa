<?php

/**
 * ECSHOP 銷售明細列表程序
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $Id: sale_list.php 15013 2008-10-23 09:31:42Z testyang $
 * $CHT by 00992266 @ ECClub.tw $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'includes/lib_order.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/statistic.php');
$smarty->assign('lang', $_LANG);

/* act操作項的初始化 */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}
else
{
    $_REQUEST['act'] = trim($_REQUEST['act']);
}

/* 權限判斷 */
admin_priv('sale_order_stats');

/*------------------------------------------------------ */
//--數據查詢
/*------------------------------------------------------ */
/* 時間參數 */
if (isset($_POST) && !empty($_POST))
{
    $start_date = local_strtotime($_POST['start_date']);
    $end_date = local_strtotime($_POST['end_date']);
}
elseif (isset($_GET['start_date']) && !empty($_GET['end_date']))
{
    $start_date = local_strtotime($_GET['start_date']);
    $end_date = local_strtotime($_GET['end_date']);
}
else
{
    $today  = local_strtotime(local_date('Y-m-d'));
    $start_date = $today - 86400 * 7;
    $end_date   = $today;
}

if ($_REQUEST['act'] == 'down_sales_list')
{
    $start_date = $_GET['start_date'];
    $end_date   = $_GET['end_date'];
}

/* 查詢數據的條件 */
$goods_sales_list = array();
$where = " WHERE og.order_id = oi.order_id". order_query_sql('finished', 'oi.') .
         " AND oi.add_time >= '$start_date' AND oi.add_time < '" . ($end_date + 86400) . "'";

$sql = 'SELECT og.goods_id, og.goods_sn, og.goods_name, og.goods_number AS goods_num, og.goods_price '.
       'AS sales_price, oi.add_time AS sales_time, oi.order_id, oi.order_sn '.
       "FROM " . $ecs->table('order_goods')." AS og, ".$ecs->table('order_info')." AS oi ".
       $where. " ORDER BY sales_time DESC, goods_num DESC";

$res = $db->query($sql);

while ($items = $db->fetchRow($res))
{
    $items['sales_price']   = price_format($items['sales_price']);
    $items['sales_time']    = local_date($_CFG['time_format'], $items['sales_time']);
    $goods_sales_list[]     = $items;
}

/*------------------------------------------------------ */
//--商品明細列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 賦值到模板 */
    $smarty->assign('goods_sales_list', $goods_sales_list);
    $smarty->assign('start_date',   local_date('Y-m-d', $start_date));
    $smarty->assign('end_date',     local_date('Y-m-d', $end_date));

    $smarty->assign('ur_here',      $_LANG['sale_list']);
    $smarty->assign('cfg_lang',     $_CFG['lang']);
    $smarty->assign('action_link',  array('text' => $_LANG['down_sales'],
    'href'=>'sale_list.php?act=down_sales_list&start_date='.$start_date.'&end_date='.$end_date));

    /* 顯示頁面 */
    assign_query_info();
    $smarty->display('sale_list.htm');
}

/*------------------------------------------------------ */
//--Excel文件下載
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'down_sales_list')
{
    $file_name = $_REQUEST['start_date'].'_'.$_REQUEST['end_date'] . '_sale';

    header("Content-type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=$file_name.xls");

    /* 文件標題 */
    echo ecs_iconv(EC_CHARSET, 'BIG5', local_date('Y-m-d', $_REQUEST['start_date']). $_LANG['to'] .local_date('Y-m-d', $_REQUEST['end_date']) . $_LANG['sales_list']) . "\t\n";

    /* 商品名稱,訂單號,商品數量,銷售價格,銷售日期 */
    echo ecs_iconv(EC_CHARSET, 'BIG5', $_LANG['goods_name']) . "\t";
    echo ecs_iconv(EC_CHARSET, 'BIG5', $_LANG['order_sn']) . "\t";
    echo ecs_iconv(EC_CHARSET, 'BIG5', $_LANG['amount']) . "\t";
    echo ecs_iconv(EC_CHARSET, 'BIG5', $_LANG['sell_price']) . "\t";
    echo ecs_iconv(EC_CHARSET, 'BIG5', $_LANG['sell_date']) . "\t\n";

    foreach ($goods_sales_list AS $key => $value)
    {
        echo ecs_iconv(EC_CHARSET, 'BIG5', $value['goods_name']) . "\t";
        echo ecs_iconv(EC_CHARSET, 'BIG5', '[ ' . $value['order_sn'] . ' ]') . "\t";
        echo ecs_iconv(EC_CHARSET, 'BIG5', $value['goods_num']) . "\t";
        echo ecs_iconv(EC_CHARSET, 'BIG5', $value['sales_price']) . "\t";
        echo ecs_iconv(EC_CHARSET, 'BIG5', $value['sales_time']) . "\t";
        echo "\n";
    }
}

?>