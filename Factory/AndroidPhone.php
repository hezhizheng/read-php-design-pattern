<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 1:59
 * Created by PhpStorm.
 */

namespace Factory;

class AndroidPhone extends AbstractPhone
{
    public function __construct()
    {
        $this->phoneName = 'android';
    }
}