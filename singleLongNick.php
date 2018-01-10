<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午1:12
 */
/**
{
    "retcode": 0,
    "result": [
        {
            "uin": 467894823,
            "lnick": "愿使用拱拱的人能顺利登陆！！！愿天堂没有那没多系统！！！愿世界和平！！！！"
        }
    ]
}
**/

use kilingzhang\SmartQQ\QQClient;

require 'Application.php';

$uin = isset($_GET['uin']) ? $_GET['uin'] : '';
if ($uin == '') {
    exit('{"code":65535,"msg":"参数缺失"}');
}

$single = $QQ->getSingleLongNickByUin($uin);
echo json_encode($single,JSON_UNESCAPED_UNICODE);