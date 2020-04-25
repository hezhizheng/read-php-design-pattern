<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 0:19
 * Created by PhpStorm.
 */

namespace Observer;

// 定义一个老大哥为主体的接口
use Facade\Product;

interface BigBrother
{
    public function register(People $people);

    public function remove(People $people);

    public function notify();
}