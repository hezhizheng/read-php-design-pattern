<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 16:09
 * Created by PhpStorm.
 */

namespace AbstractFactory;


class HomeProduct implements HomeProductApi
{
    public function kettle()
    {
        return __CLASS__ . ' ' . __FUNCTION__;
    }

    public function shoes()
    {
        return __CLASS__ . ' ' . __FUNCTION__;
    }
}