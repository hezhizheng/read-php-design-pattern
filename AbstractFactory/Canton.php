<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 15:48
 * Created by PhpStorm.
 */

namespace AbstractFactory;

// 广州公司
class Canton implements XiaomiGroupApi
{
    public function createElectronicProduct()
    {
        return new ElectronicProduct();
    }

    public function createHomeProduct()
    {
        return new HomeProduct();
    }
}