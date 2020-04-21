<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Adapter/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use \Adapter\LogAction;

// 保存 log 到 Mysql or redis

$logData = [
    'user' => 'kui',
    'type' => 'update',
];

$action = new LogAction();

$action->saveLog('redis', $logData);
$action->saveLog('mysql', $logData);