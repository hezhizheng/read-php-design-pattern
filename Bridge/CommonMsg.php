<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:40
 * Created by PhpStorm.
 */

namespace Bridge;

class CommonMsg extends AbstractMsg
{
    public function sendMsg($content, $user)
    {
        echo "send CommonMsg $content to $user" . PHP_EOL;
        return $this->sendMsgApi->send($content, $user);
    }
}