<?php
// 实现： 将构造函数定义为私有的，保证单例类不能被实例化。再创建一个静态函数负责返回不用实例化也能返回实例化的对象，保证只有一个实例。

namespace Singleton;

// 定义一个不能被实例化的类
class Singleton
{
    private static $singleton;

    private function __construct()
    {
    }

    public static function getSingleton()
    {
        if (self::$singleton == null) {
            var_dump(1); // 只会 new 一次
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }

    public function test()
    {
        return __CLASS__ . ' ' . __FUNCTION__;
    }
}