<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-10
 * Time: 下午11:44
 */

use kilingzhang\SmartQQ\Exception\RetcodeException;
use \kilingzhang\SmartQQ\Interfaces\PollMsgInterface;
use  \kilingzhang\SmartQQ\Entity\ClientToken;
use  \kilingzhang\SmartQQ\Entity\ResponseMessage;

class MessageSaveByFile implements PollMsgInterface
{

    public function FreindMessage(ResponseMessage $message)
    {
        $fromUin = $message->fromUin;
        $toUin = $message->toUin;
        $msg = $message->content;
        $time = $message->time;
        $log = 'time=' . $time . '->user:' . $fromUin . '->send->' . $msg . '->to->' . $toUin . '->From Private';
        Logger::m($log);
    }

    public function GroupMessage(ResponseMessage $message)
    {
        $fromUin = $message->fromUin;
        $toUin = $message->toUin;
        $groupCode = $message->groupCode;
        $msg = $message->content;
        $type = $message->pollType;
        $time = $message->time;
        $log = 'time=' . $time . '->user:' . $fromUin . '->send->' . $msg . '->to->' . $toUin . '->From GroupCode:' . $groupCode;
        Logger::m($log);
    }

    public function DiscusMessage(ResponseMessage $message)
    {
        $fromUin = $message->fromUin;
        $toUin = $message->toUin;
        $did = $message->did;
        $msg = $message->content;
        $type = $message->pollType;
        $time = $message->time;
        $log = 'time=' . $time . '->user:' . $fromUin . '->send->' . $msg . '->to->' . $toUin . '->From Did:' . $did;
        Logger::m($log);
    }

    public function ErrorRetcode($retcode, ClientToken $clientToken)
    {
        switch ($retcode){
            case 103:
                //TODO Login out
                $clientToken->delete();
                throw new RetcodeException('103  http://w.qq.com');
                break;
            default:
                //TODO Login out
                $clientToken->delete();
                throw new RetcodeException('login out...');
                break;
        }
    }
}