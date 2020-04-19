<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Factory/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Factory\AchieveAndroidPhone;
use Factory\SimplePhoneFactory;

$android = new AchieveAndroidPhone();

$phone = $android->createPhone()->getPhoneName();

var_dump(compact('phone'));

echo "===============simple factory===================" . PHP_EOL;

$iphone = SimplePhoneFactory::build('iphone');
var_dump(compact('iphone'));
$i = $iphone->createPhone()->getPhoneName();

var_dump(compact('i'));