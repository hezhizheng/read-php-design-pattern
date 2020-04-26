<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Interpreter/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Interpreter\Calculate;

$Calculate = new Calculate();

$right = 0.8557;
$left = 0.6488;
$scale = 2;

Calculate::init('+')->calculate($right, $left, $scale);
Calculate::init('-')->calculate($right, $left, $scale);
Calculate::init('*')->calculate($right, $left, $scale);
Calculate::init('%')->calculate($right, $left, $scale);
