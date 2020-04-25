<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 0:36
 * Created by PhpStorm.
 */

namespace Observer;


// 观察者B
class PeopleB implements People
{
    public function studyPowerCountry()
    {
        // TODO: Implement studyPowerCountry() method.
        echo "is PeopleB studyPowerCountry ".PHP_EOL;
    }
}