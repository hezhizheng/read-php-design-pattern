<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 17:10
 * Created by PhpStorm.
 */

// run: php NullObject/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use NullObject\Service;
use NullObject\NullLog;
use NullObject\LogEntity;


$log = new LogEntity();
$null = new NullLog();

$service = new Service($log);

$service->do();

$service = new Service($null);

echo "==========null==============" . PHP_EOL;

$service->do();


