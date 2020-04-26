<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 15:53
 * Created by PhpStorm.
 */

namespace Visitor;

class People
{
    public function eat(VisitorInterface $visitor)
    {
        return $visitor->eat();
    }
}