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

$did = isset($_GET['did']) ? $_GET['did'] : '';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
if($did == '' || $msg == ''){
    exit('{"code":65535,"msg":"参数缺失"}');
}
echo json_encode($QQ->sendDiscusMsg($did,$msg),JSON_UNESCAPED_UNICODE);