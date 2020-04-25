<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/25
 * Time: 17:55
 * Created by PhpStorm.
 */

namespace Strategy;


class Strategy
{

    protected $transportation;

    public function __construct(Transportation $transportation)
    {
        $this->transportation = $transportation;
    }

    public function to()
    {
        return $this->transportation->to();
    }
}