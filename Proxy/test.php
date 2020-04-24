<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Proxy/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Proxy\DBQueryProxy;


$DBQueryProxy = new DBQueryProxy();


echo "第一个查询" . PHP_EOL; // 会初始化
$DBQueryProxy->query();

echo "========================================" . PHP_EOL;

echo "第二个查询" . PHP_EOL; // 第一次初始化之后 再调用不会再执行 \Proxy\DBQuery::__construct 的方法
$DBQueryProxy->query();


