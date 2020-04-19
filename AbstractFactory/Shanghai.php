<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 15:53
 * Created by PhpStorm.
 */

namespace AbstractFactory;

// 上海公司
class Shanghai implements XiaomiGroupApi
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