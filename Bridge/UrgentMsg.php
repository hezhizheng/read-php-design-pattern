<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:45
 * Created by PhpStorm.
 */

namespace Bridge;

class UrgentMsg extends AbstractMsg
{
    public function sendMsg($content, $user)
    {
        echo "send UrgentMsg $content to $user" . PHP_EOL;
        return $this->sendMsgApi->send($content, $user);
    }
}