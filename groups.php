<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午12:11
 */
/**
{
    "retcode": 0,
    "result": {
    "gmasklist": [],
        "gnamelist": [
            {
                "flag": 721421329,
                "name": "三翼官方对外交流群",
                "gid": 2445279964,
                "code": 1451805078
            },
            {
                "flag": 184550417,
                "name": "拱拱交流群",
                "gid": 2034454951,
                "code": 2034454951
            }
        ],
        "gmarklist": []
    }
}
 */
use kilingzhang\SmartQQ\QQClient;

require 'Application.php';


$groups = $QQ->getGroupNameList();
echo json_encode($groups,JSON_UNESCAPED_UNICODE);