<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/20
 * Time: 22:51
 * Created by PhpStorm.
 */

namespace Flyweight;

class Horse implements AnimalApi
{
    public function __construct()
    {

    }

    public function getType()
    {
        // TODO: Implement getType() method.
        return "这里是动物农庄的老马" . PHP_EOL;
    }
}