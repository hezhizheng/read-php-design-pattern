<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/9/6
 * Time: 15:56
 * Created by PhpStorm.
 */

// run: php IOC/test.php

namespace IOC;

require_once(dirname(__DIR__) . '/autoload.php');


// ===================================普通依赖注入===================================

$computer = new Computer(new CommonBoard());
echo "普通依赖注入".PHP_EOL;
$computer->output();

// ===================================容器实现===================================

$container = new Container();

$container->bind('IOC\Board', function ($container) {
    return new MechanicalKeyboard();
});

$container->bind('IOC\Computer', function ($container, $module) {
    var_dump($module);
    return new Computer($container->make($module));
});

/** @var Computer $computer */
$computer = $container->make('IOC\Computer', ['IOC\Board']);

var_dump($computer);
echo "容器实现".PHP_EOL;
$computer->output();