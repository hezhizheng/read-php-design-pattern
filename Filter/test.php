<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Filter/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Filter\SportsPerson;
use Filter\FilterType;
use Filter\FilterGender;

try {
    // 定义一组运动员
    $persons = [];
    $persons[] = new SportsPerson('male', 'basketball');
    $persons[] = new SportsPerson('female', 'basketball');
    $persons[] = new SportsPerson('male', 'football');
    $persons[] = new SportsPerson('female', 'football');
    $persons[] = new SportsPerson('male', 'swim');
    $persons[] = new SportsPerson('female', 'swim');


    // 按过滤男性
    $filterGender = new FilterGender('male');
    var_dump($filterGender->filter($persons));

    // 过滤运动项目篮球
    $filterSportType = new FilterType('basketball');
    var_dump($filterSportType->filter($persons));

} catch (\Exception $e) {
    echo $e->getMessage();
}


