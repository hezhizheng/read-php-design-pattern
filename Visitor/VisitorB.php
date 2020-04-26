<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 15:56
 * Created by PhpStorm.
 */

namespace Visitor;


class VisitorB implements VisitorInterface
{

    public function eat()
    {
        // TODO: Implement eat() method.
        echo __CLASS__ . ' ' . __FUNCTION__ . PHP_EOL;
    }
}