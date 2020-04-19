<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:36
 * Created by PhpStorm.
 */

namespace Bridge;

abstract class AbstractMsg
{
    public $sendMsgApi;

    public function __construct(SendMsgApi $sendMsgApi)
    {
        $this->sendMsgApi = $sendMsgApi;
    }

    abstract public function sendMsg($content, $user);
}