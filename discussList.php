<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午12:15
 */
/**
{
    "retcode": 0,
    "result": {
    "dnamelist": [
            {
                "name": "~、拱拱",
                "did": 1774354445
            }
        ]
    }
}
**/

use kilingzhang\SmartQQ\QQClient;

require 'Application.php';


$discussList = $QQ->getDiscusList();
echo json_encode($discussList,JSON_UNESCAPED_UNICODE);