<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 0:36
 * Created by PhpStorm.
 */

namespace Observer;


// 观察者A
class PeopleA implements People
{
    public function studyPowerCountry()
    {
        // TODO: Implement studyPowerCountry() method.
        echo "is PeopleA studyPowerCountry ".PHP_EOL;
    }
}