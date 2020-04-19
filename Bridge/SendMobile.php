<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:13
 * Created by PhpStorm.
 */

namespace Bridge;

class SendMobile implements SendMsgApi
{
    public function send($content, $user)
    {
        echo "send mobile $content to $user" . PHP_EOL;
    }
}