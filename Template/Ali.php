<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/25
 * Time: 17:05
 * Created by PhpStorm.
 */

namespace Template;


class Ali extends Sms
{
    public function init(array $config = [])
    {
        // TODO: Implement init() method.
        $this->config = $config;
    }

    public function sendSms($mobile)
    {
        // TODO: Implement sendSms() method.
        $this->content .= ' ali ';
        echo "send $this->content to $mobile".PHP_EOL;
    }
}