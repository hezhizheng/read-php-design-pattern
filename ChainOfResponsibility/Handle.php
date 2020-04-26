<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 15:06
 * Created by PhpStorm.
 */

namespace ChainOfResponsibility;
abstract class Handle
{
    protected $_handel = [];

    abstract public function check(Request $request);

    public function setNext(Handle $handle)
    {
        array_push($this->_handel, $handle);

        return $this;
    }

    public function start(Request $request)
    {
        /** @var Handle $_handel */
        foreach ($this->_handel as $_handel) {
            $_handel->check($request);
        }
    }
}