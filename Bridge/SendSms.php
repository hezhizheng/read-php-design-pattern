<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:13
 * Created by PhpStorm.
 */

namespace Bridge;

class SendSms implements SendMsgApi
{

    public function send($content, $user)
    {
        echo "send sms $content to $user";
    }
}