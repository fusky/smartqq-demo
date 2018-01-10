<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午1:11
 */

/**
{
    "retcode": 0,
    "result": {
    "birthday": {
        "month": 11,
            "year": 2016,
            "day": 24
        },
        "face": 0,
        "phone": "",
        "occupation": "",
        "allow": 1,
        "college": "",
        "uin": 2954301659,
        "blood": 0,
        "constel": 11,
        "lnick": "别找啦，我就是那只最幸福的小猪🤔🤔🤔",
        "vfwebqq": "ef5842349f13858e336238d7510f2849c1af39f398394099da49976f144b3393e86bd9ceeee5a30e",
        "homepage": "",
        "vip_info": 0,
        "city": "",
        "country": "",
        "personal": "",
        "shengxiao": 9,
        "nick": "拱拱",
        "email": "",
        "province": "",
        "account": 2954301659,
        "gender": "male",
        "mobile": "-"
    }
}
**/

use kilingzhang\SmartQQ\QQClient;

require 'Application.php';


$self = $QQ->getSelfInfo();
echo json_encode($self,JSON_UNESCAPED_UNICODE);