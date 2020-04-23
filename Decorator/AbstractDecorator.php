<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/23
 * Time: 0:35
 * Created by PhpStorm.
 */

namespace Decorator;

abstract class AbstractDecorator implements TShirtApi
{
    protected $TShirtApi;

    public function __construct(TShirtApi $TShirtApi)
    {
        $this->TShirtApi = $TShirtApi;
    }

    public function product()
    {
        // TODO: Implement product() method.
        return $this->product();
    }

    // 要装饰的东西 / 新加的功能
    abstract public function decorate($value);
}