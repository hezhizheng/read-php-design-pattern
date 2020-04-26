<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Visitor/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Visitor\People;
use Visitor\VisitorA;
use Visitor\VisitorB;

$people = new People();

$people->eat(new VisitorA());
$people->eat(new VisitorB());




