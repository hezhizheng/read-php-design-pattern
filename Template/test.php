<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Template/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Template\Ali;
use Template\Tencent;

$ali = new Ali([
    'key' => 'alixyxyxyyxyxyx'
]);
$ali->send('111111111');

$tencent = new Tencent([
    'key' => 'askjdhqwjn'
]);

$tencent->send('22222222222');



