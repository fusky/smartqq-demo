<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午12:14
 */

/**
{
    "retcode": 0,
    "result": {
    "face": 594,
        "birthday": {
        "month": 1,
            "year": 0,
            "day": 10
        },
        "occupation": "其他",
        "phone": "1234567",
        "allow": 1,
        "college": "XTU",
        "uin": 467894823,
        "constel": 12,
        "blood": 3,
        "homepage": "www.kilingzhang.com",
        "stat": 30,
        "vip_info": 0,
        "country": "",
        "city": "",
        "personal": "一只小渣渣",
        "nick": "~",
        "shengxiao": 0,
        "email": "",
        "client_type": 1,
        "province": "",
        "gender": "unknown",
        "mobile": "-"
    }
}
**/

require 'Application.php';

$uin = isset($_GET['uin']) ? $_GET['uin'] : '';
if ($uin == '') {
    exit('{"code":65535,"msg":"参数缺失"}');
}
$friend = $QQ->getFriendInfoByUin($uin);
echo json_encode($friend, JSON_UNESCAPED_UNICODE);