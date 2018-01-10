<?php
use kilingzhang\SmartQQ\QQClient;
use kilingzhang\SmartQQ\Entity\ClientToken;

require __DIR__ . '/../vendor/autoload.php';
require 'Logger.php';
date_default_timezone_set('Asia/Shanghai');
//初始化QQClient,后续讲基于此会话调用各种方法
$QQ = new QQClient();
$QQ->setQRCodePath('./qrcode.png');
//初始化用户登录令牌
$clientToken = new ClientToken();
//判断令牌是否为空（有无缓存登录状态）
if ($clientToken->isEmpty()) {
    Logger::i('clientToken is empty');
    //第一次登录
    $QQ->refreshQRCode();
    //验证二维码状态
    if ($QQ->QRlogin()) {
        Logger::i('QQ->QRlogin success');
        //二次登陆
        $QQ->Login();
        Logger::i('Login success');
        //讲用户登录状态信息转换为登录令牌
        $clientToken = $QQ->getClienToken();
        //保存登录令牌
        $clientToken->save();
        Logger::i('ClientToken Save success');
    }
} else {
    Logger::i('clientToken is not empty');
    //获取已缓存的用户登录令牌
    $clientToken = ClientToken::toClientToken($clientToken->getClientTokenJson());
    //根据令牌设置用户会话
    $QQ->setClienToken($clientToken);
}
//$QQ->test();