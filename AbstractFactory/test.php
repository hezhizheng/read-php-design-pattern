<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php AbstractFactory/test.php

require_once(dirname(__DIR__) . '/autoload.php');

//use AbstractFactory\ElectronicProduct;

use \AbstractFactory\XiaomiGroupApi;
use \AbstractFactory\Canton;
use \AbstractFactory\Shanghai;

/**
 * @param XiaomiGroupApi $xiaomiGroupApi
 * @return XiaomiGroupApi
 */
function call(XiaomiGroupApi $xiaomiGroupApi)
{
    return $xiaomiGroupApi;
}

$canton = new  Canton();
$shanghai = new  Shanghai();

// call($canton)->createElectronicProduct() 实现 ElectronicProductApi接口

var_dump(call($canton)->createElectronicProduct()->phone());

// call($canton)->createHomeProduct() 实现 HomeProductApi接口
var_dump(call($shanghai)->createHomeProduct()->shoes());

