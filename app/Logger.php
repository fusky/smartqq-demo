<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-10
 * Time: 下午10:31
 */

class Logger
{

    public static function i($msg, $path = '../log')
    {
        if (!is_dir($path)) {
            mkdir($path);
        }
        $filename = $path . '/' . date('Ymd') . '.log';
        $log = date("Y-m-d H:i:s") . "\r\n" . $msg . "\r\n \r\n \r\n ";
        file_put_contents($filename, $log, FILE_APPEND);
    }

    public static function m($msg, $path = '../message')
    {
        if (!is_dir($path)) {
            mkdir($path);
        }
        $filename = $path . '/' . date('Ymd') . '.log';
        $content = date("Y-m-d H:i:s") . "\r\n" . $msg . "\r\n";
        file_put_contents($filename, $content, FILE_APPEND);
    }

}