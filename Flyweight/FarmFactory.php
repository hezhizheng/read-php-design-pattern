<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/20
 * Time: 22:54
 * Created by PhpStorm.
 */

namespace Flyweight;


class FarmFactory
{
    // 这是农场的缓存池
    protected static $_farm = [];
    protected $_farmMap = [];

    protected static $map = [
        'pig' => 'Flyweight\Pig',
        'horse' => 'Flyweight\Horse',
    ];

    protected $_map = [
        'pig' => 'Flyweight\Pig',
        'horse' => 'Flyweight\Horse',
    ];

    public function __construct()
    {
        echo "初始化一个动物农场" . PHP_EOL;
    }

    /**
     * 静态方法
     * @param $stage
     * @return mixed|AnimalApi
     */
    public static function create($stage)
    {
        // 这里输出，可以看见一次调用跟同时调用两次的缓存情况
        $dump_farm = self::$_farm;
        var_dump(compact('dump_farm'));

        if (key_exists($stage, self::$_farm)) {
            echo "来自缓存池" . PHP_EOL;
            return self::$_farm[$stage];
        }

        return self::$_farm[$stage] = new self::$map[$stage];
    }

    /**
     * @param $stage
     * @return mixed|AnimalApi
     */
    public function produce($stage)
    {
        if (key_exists($stage, self::$_farm)) {
            echo "来自缓存池" . PHP_EOL;
            return self::$_farm[$stage];
        }

        return self::$_farm[$stage] = new self::$map[$stage];

    }
}