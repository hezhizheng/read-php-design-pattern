<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 21:45
 * Created by PhpStorm.
 */

namespace Builder;


class Xml implements BuilderApi
{
    public function setHeader(string $header)
    {
        echo "xml set header $header".PHP_EOL;
    }

    public function setBody(string $body)
    {
        echo "xml set body $body".PHP_EOL;
    }

    public function setFooter(string $footer)
    {
        echo "xml set footer $footer".PHP_EOL;
    }
}