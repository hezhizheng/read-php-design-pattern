<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 21:40
 * Created by PhpStorm.
 */

namespace Builder;

class Director
{
    protected $builderApi;

    public function __construct(BuilderApi $builderApi)
    {
        $this->builderApi = $builderApi;
    }

    public function construct(string $header, string $body, string $footer)
    {
        $this->builderApi->setHeader($header);
        $this->builderApi->setBody($body);
        $this->builderApi->setFooter($footer);
        return $this;
    }
}