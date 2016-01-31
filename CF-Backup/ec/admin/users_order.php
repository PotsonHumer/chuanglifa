<?php

/**
 * ECSHOP 會員排行統計程序
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $Id: users_order.php 15013 2008-10-23 09:31:42Z testyang $
 * $CHT by 00992266 @ ECClub.tw $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'includes/lib_order.php');
require_once('../languages/' .$_CFG['lang']. '/admin/statistic.php');

/* act操作項的初始化 */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'order_num';
}
else
{
    $_REQUEST['act'] = trim($_REQUEST['act']);
}

$smarty->assign('lang', $_LANG);

/* 權限判斷 */
admin_priv('client_flow_stats');

/* 時間參數 */
if ( !empty($_REQUEST['start_date']) && !empty($_REQUEST['end_date']))
{
    $start_date = local_strtotime($_REQUEST['start_date']);
    $end_date   = local_strtotime($_REQUEST['end_date']);
}
else
{
    $today  = local_strtotime(local_date('Y-m-d'));
    $start_date = $today - 86400 * 7;
    $end_date   = $today;
}

/* 根據用戶條件生成報表顯示的數量*/
$show_num   = (!empty($_REQUEST['show_num'])) ? intval($_REQUEST['show_num']) : 15;

/*------------------------------------------------------ */
//--按訂單數量排行
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'order_num')
{
    /* 取得會員排行數據 */
    $user_orderinfo = get_user_orderinfo($show_num, 'order_num', $start_date, $end_date);

    /* 賦值到模板 */
    $smarty->assign('ur_here',      $_LANG['report_users']);
    $smarty->assign('action_link',  array('text' => $_LANG['buy_sum_sort'],
    'href'=>'users_order.php?act=turnover'));
    $smarty->assign('action_link2',  array('text' => $_LANG['download_amount_sort'],
    'href'=>"users_order.php?act=download&start_date=$start_date&end_date=$end_date&orderby=order_num"));

    $smarty->assign('user_orderinfo', $user_orderinfo);
    $smarty->assign('start_date',     local_date('Y-m-d', $start_date));
    $smarty->assign('end_date',       local_date('Y-m-d', $end_date));

    $smarty->assign('form_act',       'order_num');
    $smarty->assign('show_num',       $show_num);

    /* 頁面顯示 */
    assign_query_info();
    $smarty->display('users_order.htm');
}
/*------------------------------------------------------ */
//--按購物金額排行
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'turnover')
{
    /* 取得會員排行數據 */
    $user_orderinfo = get_user_orderinfo($show_num, 'turnover', $start_date, $end_date);

    /* 賦值到模板 */
    $smarty->assign('user_orderinfo', $user_orderinfo);
    $smarty->assign('start_date',     local_date('Y-m-d', $start_date));
    $smarty->assign('end_date',       local_date('Y-m-d', $end_date));

    $smarty->assign('form_act',       'turnover');
    $smarty->assign('show_num',       $show_num);

    $smarty->assign('ur_here',      $_LANG['report_users']);
    $smarty->assign('action_link',  array('text' => $_LANG['order_amount_sort'],
    'href'=>'users_order.php?act=order_num'));
    $smarty->assign('action_link2',  array('text' => $_LANG['download_amount_sort'],
    'href'=>"users_order.php?act=download&start_date=$start_date&end_date=$end_date&orderby=turnover"));

    /* 顯示頁面 */
    assign_query_info();
    $smarty->display('users_order.htm');
}
if ($_REQUEST['act'] == 'download')
{
    $start_date = $_REQUEST['start_date'];
    $end_date   = $_REQUEST['end_date'];

    $user_orderinfo = get_user_orderinfo($show_num, 'turnover', $start_date, $end_date);
    $filename = $start_date . '_' . $end_date . 'users_order';

    header("Content-type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=$filename.xls");

    $data = "$_LANG[visit_buy]\t\n";
    $data .= "$_LANG[order_by]\t$_LANG[member_name]\t$_LANG[order_amount]\t$_LANG[buy_sum]\t\n";

    foreach ($user_orderinfo AS $k => $row)
    {
        $order_by = $k + 1;
        $data .= "$order_by\t$row[user_name]\t$row[order_num]\t$row[turnover]\n";
    }
    echo ecs_iconv(EC_CHARSET, 'GB2312', $data);
    exit;
}
/*------------------------------------------------------ */
//--會員排行需要的函數
/*------------------------------------------------------ */
/*
 * 取得會員訂單量/購物額排名統計數據
 *
 * @param   int             $show_num        每頁顯示的數量
 * @param   timestamp       $start_date      開始時間
 * @param   timestamp       $end_date        結束時間
 * @return  array                            會員購物排行數據
 */
 function get_user_orderinfo($show_num, $order_by, $start_date, $end_date)
 {
    global $db, $ecs;

    $where = "WHERE u.user_id = o.user_id ".
             "AND u.user_id > 0 " . order_query_sql('finished', 'o.');
    $limit = " LIMIT " .$show_num;

    if ($start_date)
    {
        $where .= "AND o.add_time >= '$start_date' ";
    }

    if ($end_date)
    {
        $where .= "AND o.add_time <= '$end_date' ";
    }

    /* 計算訂單各種費用之和的語句 */
    $total_fee = " SUM(" . order_amount_field() . ") AS turnover ";

    if ($order_by == 'order_num')
    {
        /* 按訂單數量來排序 */
        $sql = "SELECT u.user_id, u.user_name, COUNT(*) AS order_num, " .$total_fee.
               "FROM ".$ecs->table('users')." AS u, ".$ecs->table('order_info')." AS o " .$where .
               "GROUP BY u.user_id ORDER BY order_num DESC, turnover DESC" . $limit;
    }
    else
    {
        /* 按購物金額來排序 */
        $sql = "SELECT u.user_id, u.user_name, COUNT(*) AS order_num, " .$total_fee.
               "FROM ".$ecs->table('users')." AS u, ".$ecs->table('order_info')." AS o " .$where .
               "GROUP BY u.user_id ORDER BY turnover DESC, order_num DESC" . $limit;
    }

    $user_orderinfo = array();
    $res = $db->query($sql);

    while ($items = $db->fetchRow($res))
    {
        $items['turnover'] = price_format($items['turnover']);
        $user_orderinfo[] = $items;
    }

    return $user_orderinfo;
}

?>