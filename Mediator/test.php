<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 22:18
 * Created by PhpStorm.
 */

// run: php Mediator/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Mediator\Controller;
use Mediator\Model;
use Mediator\View;

$controller = new Controller();
// 选择 controller 作为 model 与 view 的中介
$model = new Model($controller);
$view = new View($controller);

$controller->setColleague($model, $view);

$controller->addUser('a1');
$controller->addUser('a2');
$controller->addUser('a3');

$controller->getUserList();


$controller->delUser('a3');


$controller->getUserList();

$controller->show('this is result');
