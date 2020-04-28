<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 0:56
 * Created by PhpStorm.
 */

// run: php State/test.php
require_once(dirname(__DIR__) . '/autoload.php');


use State\School;

$school = new School();

// 不同级别状态对应执行不同的举报方法
foreach (array_keys($school->map) as $state) {
    $school->report($state);
}