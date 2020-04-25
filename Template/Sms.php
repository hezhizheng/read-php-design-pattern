<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/25
 * Time: 16:48
 * Created by PhpStorm.
 */

namespace Template;

abstract class Sms
{
    protected $content = '';
    protected $config = [];

    final function __construct(array $config = [])
    {
        var_dump($config);
        $this->init($config);
    }

    abstract public function init(array $config = []);

    public function content()
    {
        $this->content .= rand(000000, 999999);
    }

    abstract public function sendSms($mobile);

    public function send($mobile)
    {
        $this->content();
        $this->sendSms($mobile);
    }
}