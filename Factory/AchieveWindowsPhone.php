<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:03
 * Created by PhpStorm.
 */

namespace Factory;

class AchieveWindowsPhone implements PhoneApi
{
    public function createPhone()
    {
        return new WindowsPhone();
    }
}