<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 23:41
 * Created by PhpStorm.
 */

namespace NullObject;


class Service
{
    protected $log;

    public function __construct(LogInterface $log)
    {
        $this->log = $log;
    }

    public function do()
    {
        $this->log->log();
    }
}