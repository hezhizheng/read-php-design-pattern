<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 15:58
 * Created by PhpStorm.
 */

namespace AbstractFactory;

class ElectronicProduct implements ElectronicProductApi
{
    public function phone()
    {
        return __CLASS__ . ' ' . __FUNCTION__;
    }

    public function wristband()
    {
        return __CLASS__ . ' ' . __FUNCTION__;
    }
}