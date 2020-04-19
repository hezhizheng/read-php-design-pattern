<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 1:56
 * Created by PhpStorm.
 */
namespace Factory;

// 定义一个抽象类，子类继承该抽象类
// 可以理解为：抽象类就是把类像的部分抽出来
abstract class AbstractPhone
{
    public $phoneName;

    public function getPhoneName()
    {
        return $this->phoneName;
    }
}