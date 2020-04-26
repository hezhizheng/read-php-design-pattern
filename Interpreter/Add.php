<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 16:22
 * Created by PhpStorm.
 */

namespace Interpreter;
class Add implements BcMathInterFace
{

    public function calculate($right, $left, $scale)
    {
        // TODO: Implement calculate() method.

        return bcadd($right, $left, $scale);
    }
}