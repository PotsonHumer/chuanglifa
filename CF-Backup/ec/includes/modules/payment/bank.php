<?php

/**
 * ECSHOP 銀行匯款（轉帳）插件
 * ============================================================================
 * 版權所有 2005-2008 上海商派網絡科技有限公司，並保留所有權利。
 * 網站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 這不是一個自由軟件！您只能在不用於商業目的的前提下對程序代碼進行修改和
 * 使用；不允許對程序代碼以任何形式任何目的的再發佈。
 * ============================================================================
 * $Author: testyang $
 * $CHT by 00992266 @ECClub.tw $
 * $Id: bank.php 15013 2008-10-23 09:31:42Z testyang $
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/bank.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模塊的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代碼 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述對應的語言項 */
    $modules[$i]['desc']    = 'bank_desc';

    /* 是否支持貨到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在線支付 */
    $modules[$i]['is_online']  = '0';

    /* 作者 */
    $modules[$i]['author']  = 'ECSHOP TEAM';

    /* 網址 */
    $modules[$i]['website'] = 'http://www.ecshop.com';

    /* 版本號 */
    $modules[$i]['version'] = '1.0.0';

    /* 配置信息 */
    $modules[$i]['config']  = array();

    return;
}

/**
 * 類
 */
class bank
{
    /**
     * 構造函數
     *
     * @access  public
     * @param
     *
     * @return void
     */
    function bank()
    {
    }

    function __construct()
    {
        $this->bank();
    }

    /**
     * 提交函數
     */
    function get_code()
    {
        return '';
    }

    /**
     * 處理函數
     */
    function response()
    {
        return;
    }
}

?>