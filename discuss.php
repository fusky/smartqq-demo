<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午12:11
 */
/**
{
    "result": {
    "info": {
        "did": 1774354445,
            "discu_name": "~、拱拱",
            "mem_list": [
                {
                    "mem_uin": 467894823,
                    "ruin": 1353693508
                },
                {
                    "mem_uin": 2954301659,
                    "ruin": 2954301659
                }
            ]
        },
        "mem_info": [
            {
                "nick": "~",
                "uin": 467894823
            },
            {
                "nick": "拱拱",
                "uin": 2954301659
            }
        ],
        "mem_status": [
            {
                "client_type": 7,
                "status": "online",
                "uin": 2954301659
            },
            {
                "client_type": 1,
                "status": "online",
                "uin": 467894823
            }
        ]
    },
    "retcode": 0
}
**/

use kilingzhang\SmartQQ\QQClient;

require 'Application.php';

$did = isset($_GET['did']) ? $_GET['did'] : '';
if($did == ''){
    return '{"code":65535,"msg":"参数缺失"}';
}
$discuss = $QQ->getDiscusInfoByDid($did);
echo json_encode($discuss,JSON_UNESCAPED_UNICODE);