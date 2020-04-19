<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 21:37
 * Created by PhpStorm.
 */

namespace Builder;

interface BuilderApi
{
    public function setHeader(string $header);

    public function setBody(string $body);

    public function setFooter(string $footer);
}