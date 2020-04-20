<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/20
 * Time: 22:50
 * Created by PhpStorm.
 */

namespace Flyweight;

class Pig implements AnimalApi
{
    public function __construct()
    {

    }

    public function getType()
    {
        // TODO: Implement getType() method.

        return '这是动物农庄的拿破仑' . PHP_EOL;
    }
}