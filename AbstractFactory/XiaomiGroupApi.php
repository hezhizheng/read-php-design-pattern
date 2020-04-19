<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 15:41
 * Created by PhpStorm.
 */

namespace AbstractFactory;

interface XiaomiGroupApi
{
    // 生产科技产品
    public function createElectronicProduct();

    // 生产居家产品
    public function createHomeProduct();
}