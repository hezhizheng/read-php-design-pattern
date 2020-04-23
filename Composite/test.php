<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Composite/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Composite\Folder;
use Composite\File;

$root = new Folder('root');

// 根目录下添加一个test.php的文件和usr,mnt的文件夹
$testFile = new File('test.php');
$usr = new Folder('usr');
$mnt = new Folder('mnt');

$root->add($testFile);
$root->add($usr);
$root->add($mnt);
$usr->add($testFile); // usr目录下加一个test.php的文件

// 打印根目录文件夹节点
$root->printComposite();