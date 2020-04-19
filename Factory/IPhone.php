<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 1:59
 * Created by PhpStorm.
 */

namespace Factory;

class IPhone extends AbstractPhone
{
    public function __construct()
    {
        $this->phoneName = 'iphone';
    }

    /**
     * 重写继承抽象类的方法，是为多态的表现
     * @return string
     */
    public function getPhoneName()
    {
        return 'Rewrite function iphone';
    }
}