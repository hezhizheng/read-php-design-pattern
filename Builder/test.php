<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Builder/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Builder\Text;
use Builder\Xml;
use Builder\Director;

$header = '11111';
$body = '22222';
$footer = '33333';

$text = new Text();
$xml = new Xml();

// 初始化工作全在Director中完成，不关心具体的实现流程 。Director 只依赖外部的BuilderApi接口的实现类

$textDirector = (new Director($text))->construct($header, $body, $footer);
$xmlDirector = (new Director($xml))->construct($header, $body, $footer);

var_dump(compact('textDirector', 'xmlDirector'));