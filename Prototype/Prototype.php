<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 17:00
 * Created by PhpStorm.
 */

namespace Prototype;

class Prototype extends AbstractPrototype
{
    public function __construct($name = '')
    {
        $this->_name = $name;
    }

    public function __set($name, $value) // 可以设置私有属性
    {
//        var_dump(compact('name1', 'value'));
        $this->$name = $value;
    }

    public function __get($name) // 可以获取私有属性
    {
        $this->$name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getClonePrototype()
    {
        return clone $this;
    }
}