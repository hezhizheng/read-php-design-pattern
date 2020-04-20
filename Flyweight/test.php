<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Flyweight/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Flyweight\FarmFactory;

$pig1 = FarmFactory::create('pig');
$pigType1 = $pig1->getType();


$pig2 = FarmFactory::create('pig');
$pigType2 = $pig2->getType();

$horse1 = FarmFactory::create('horse');
$horseType1 = $horse1->getType();

var_dump(compact('pigType1', 'pigType2', 'horseType1'));
