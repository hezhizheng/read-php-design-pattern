<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 0:56
 * Created by PhpStorm.
 */

// run: php Singleton/test.php
require_once(dirname(__DIR__) . '/autoload.php');

use Singleton\Singleton;

// 获取一个单例
$singleton = Singleton::getSingleton();
// 获取另一个单例
$singleton2 = Singleton::getSingleton();
var_dump($singleton, $singleton2, $singleton === $singleton2);
$test = $singleton->test();
var_dump($test);
