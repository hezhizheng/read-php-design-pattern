<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 17:00
 * Created by PhpStorm.
 */

namespace Prototype;

abstract class AbstractPrototype
{
    public $_name; // protected or private

    abstract public function getName();

    abstract public function getClonePrototype();
}