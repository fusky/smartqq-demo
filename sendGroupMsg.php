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

$gid = isset($_GET['gid']) ? $_GET['gid'] : '';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
if($gid == '' || $msg == ''){
    exit('{"code":65535,"msg":"参数缺失"}');
}
echo json_encode($QQ->sendGroupMsg($gid,$msg),JSON_UNESCAPED_UNICODE);