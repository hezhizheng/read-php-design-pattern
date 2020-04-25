<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/25
 * Time: 17:53
 * Created by PhpStorm.
 */

namespace Strategy;


class Subway implements Transportation
{

    public function to()
    {
        // TODO: Implement to() method.
        echo "go to work by subway".PHP_EOL;
    }
}