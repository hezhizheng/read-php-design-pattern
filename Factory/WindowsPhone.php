<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:01
 * Created by PhpStorm.
 */
namespace Factory;

class WindowsPhone extends AbstractPhone
{
    public function __construct()
    {
        $this->phoneName = 'win';
    }
}