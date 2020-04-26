<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 16:15
 * Created by PhpStorm.
 */

namespace Interpreter;

interface BcMathInterFace
{
    public function calculate($right, $left, $scale);
}