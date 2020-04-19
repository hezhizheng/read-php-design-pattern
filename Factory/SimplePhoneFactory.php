<?php
/**
 * Description: 简单工厂方法
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:14
 * Created by PhpStorm.
 */

namespace Factory;

class SimplePhoneFactory
{
    private static $map = [
        'android' => 'Factory\AchieveAndroidPhone',
        'iphone' => 'Factory\AchieveIPhone',
        'windows' => 'Factory\AchieveWindowsPhone',
    ];

    /**
     * @param $phoneName
     * @return mixed|PhoneApi|AchieveIPhone|AchieveAndroidPhone|AchieveWindowsPhone
     */
    public static function build($phoneName)
    {
        // or switch
        return new self::$map[$phoneName];
    }
}