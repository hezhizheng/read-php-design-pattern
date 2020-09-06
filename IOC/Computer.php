<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/9/6
 * Time: 15:39
 * Created by PhpStorm.
 */

namespace IOC;

class Computer
{
    protected $keyboard;

    public function __construct(Board $board)
    {
        $this->keyboard = $board;
    }

    public function output()
    {
        // computer output keyboard input
        echo $this->keyboard->input();
    }
}