<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 16:20
 * Created by PhpStorm.
 */

namespace AbstractFactory;


interface ElectronicProductApi
{
    public function phone();

    public function wristband();
}