<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 23:10
 * Created by PhpStorm.
 */

namespace Bridge;

interface SendMsgApi
{
    /**
     * 发送消息方法
     * @param  $content // 内容
     * @param  $user // 用户
     * @return mixed
     */
    public function send($content, $user);
}