<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Observer/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Observer\BigBrotherVoice;
use Observer\PeopleA;
use Observer\PeopleB;

$BigBrotherVoice = new BigBrotherVoice();
$a = new PeopleA();
$b = new PeopleB();

echo "===========register=================".PHP_EOL;

$BigBrotherVoice->register($a);
$BigBrotherVoice->register($b);

//var_dump( $BigBrotherVoice->getPeoples() );

$BigBrotherVoice->meeting('任命PeopleA、B为真理部干事');

echo "===========remove=================".PHP_EOL;

//$BigBrotherVoice->remove($a);

$BigBrotherVoice->remove($b);

//var_dump( $BigBrotherVoice->getPeoples() );

$BigBrotherVoice->meeting('DQ PeopleB 真理部干事资格');