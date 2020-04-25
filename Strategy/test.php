<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 0:56
 * Created by PhpStorm.
 */

// run: php Strategy/test.php
require_once(dirname(__DIR__) . '/autoload.php');

use Strategy\Bus;
use Strategy\Subway;
use Strategy\Strategy;


$bus = new Bus();
$subway = new Subway();

$_bus = new Strategy($bus);
$_subway = new Strategy($subway);

$_bus->to();

$_subway->to();
