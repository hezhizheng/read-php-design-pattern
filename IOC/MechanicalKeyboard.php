<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/9/6
 * Time: 15:42
 * Created by PhpStorm.
 */

namespace IOC;
class MechanicalKeyboard implements Board
{
    public function input()
    {
        echo __CLASS__.PHP_EOL;
    }
}