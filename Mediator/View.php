<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 23:20
 * Created by PhpStorm.
 */

namespace Mediator;


class View extends Colleague
{
    public function show($res)
    {
        echo "$res".PHP_EOL;
    }
}