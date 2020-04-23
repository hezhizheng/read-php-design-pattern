<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Decorator/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Decorator\NormalTShirt;
use Decorator\DecoratorBand;
use Decorator\DecoratorLogo;


$ts = new NormalTShirt();

$res = $ts->product();

var_dump(compact('res'));
$DecoratorLogo = new DecoratorLogo($ts);

$res_logo = $DecoratorLogo->product()->decorate('404');

var_dump(compact('res_logo'));

$DecoratorBand = new DecoratorBand($ts);

$res_brand =  $DecoratorLogo->product()->decorate('x');

var_dump(compact('res_brand'));




