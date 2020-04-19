<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Prototype/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Prototype\Prototype;

// 初始原型，无论后面如何 clone 都不影响原本属性
$Prototype = new Prototype('asdasda');

$originPrototypeName = $Prototype->getName(); // asdasda

$cloneOne = $Prototype->getClonePrototype();
$cloneOne->_name = '1111';
$nameOne = $cloneOne->getName(); // 1111

$cloneTwo = $Prototype->getClonePrototype();
$cloneTwo->_name = '2222';
$nameTwo = $cloneTwo->getName(); // 2222

$newCloneOne = $cloneOne->getName(); // 1111 原型模式，这里的 cloneOne 还是保持为原有的属性

var_dump($nameOne, $nameTwo, $newCloneOne, $originPrototypeName);
