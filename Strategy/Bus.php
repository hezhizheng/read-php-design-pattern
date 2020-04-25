<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/25
 * Time: 17:51
 * Created by PhpStorm.
 */

namespace Strategy;

class Bus implements Transportation
{

    public function to()
    {
        // TODO: Implement to() method.
        echo "go to work by bus".PHP_EOL;
    }
}