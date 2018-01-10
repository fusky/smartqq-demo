<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-10
 * Time: 下午11:40
 */


use kilingzhang\SmartQQ\QQClient;

require 'Application.php';
require 'MessageSaveByFile.php';
set_time_limit(0);
//while (1){
    $QQ->pollMessage(new MessageSaveByFile());
//    sleep(1);
//}
