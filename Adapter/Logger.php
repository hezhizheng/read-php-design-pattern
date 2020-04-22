<?php

namespace Adapter;

class Logger
{
    protected $user_name;
    protected $action_type;

    public function __set($name, $value) // 可以设置私有属性
    {
        $this->$name = $value;
    }

    public function __get($name) // 可以获取私有属性
    {
        $this->$name;
    }

//    public function getUserName()
//    {
//        $this->
//    }
//
//    public function getActionType()
//    {
//
//    }
}