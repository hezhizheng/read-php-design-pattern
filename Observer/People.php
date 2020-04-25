<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 0:28
 * Created by PhpStorm.
 */

namespace Observer;

// 定义人（观察着）接口
interface People
{
    // 定义 学习强国 方法
    public function studyPowerCountry();
}