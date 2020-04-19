<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 1:21
 * Created by PhpStorm.
 */

// 注册自加载
spl_autoload_register('autoload');

//function autoload($class)
//{
//    $file_name =  dirname($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php';
//
//    var_dump($file_name);
//
//    require $file_name;
//}

function autoload($class)
{
    $file_name = $class . '.php';

//    var_dump($file_name);

    require $file_name;
}