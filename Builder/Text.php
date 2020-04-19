<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 21:45
 * Created by PhpStorm.
 */

namespace Builder;


class Text implements BuilderApi
{
    public function setHeader(string $header)
    {
        echo "text set header $header".PHP_EOL;
    }

    public function setBody(string $body)
    {
        echo "text set body $body".PHP_EOL;
    }

    public function setFooter(string $footer)
    {
        echo "text set footer $footer".PHP_EOL;
    }
}