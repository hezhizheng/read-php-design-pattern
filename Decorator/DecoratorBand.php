<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/23
 * Time: 0:44
 * Created by PhpStorm.
 */

namespace Decorator;

class DecoratorBand
{
    protected $TShirtApi;

    public function __construct(TShirtApi $TShirtApi)
    {
        $this->TShirtApi = $TShirtApi;
    }

    public function product()
    {
        // TODO: Implement product() method.
        $this->TShirtApi->product();
        return $this;
    }
    
    public function decorate($value)
    {
        // TODO: Implement decorate() method.

        return "add log $value" . PHP_EOL;
    }
}