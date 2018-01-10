<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-11
 * Time: 上午12:15
 */


/**
 * {"retcode":0}
 */

require 'Application.php';

$uin = isset($_GET['uin']) ? $_GET['uin'] : '';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
if($uin == '' || $msg == ''){
    exit('{"code":65535,"msg":"参数缺失"}');
}
$QQ->sendPrivateMsg($uin,$msg);
echo json_encode($QQ->sendPrivateMsg($uin,$msg),JSON_UNESCAPED_UNICODE);