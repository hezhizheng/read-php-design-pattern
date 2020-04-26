<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 16:26
 * Created by PhpStorm.
 */

namespace Interpreter;

namespace Interpreter;

class Calculate
{
    protected static $singleton = null;

    /**
     * @var BcMathInterFace|null
     */
    protected static $entity = null;

    protected static $symbol_map = [
        '+' => 'Interpreter\Add',
        '-' => 'Interpreter\Sub',
        '*' => 'Interpreter\Mul',
        '%' => 'Interpreter\Div',
    ];

    public static function init($symbol = '')
    {
        self::$entity = new self::$symbol_map[$symbol];

        if (self::$singleton === null) {
            var_dump("first init");
            self::$singleton = new Calculate();
        }

        return self::$singleton;
    }

    public function calculate($right, $left, $scale)
    {
        echo self::$entity->calculate($right, $left, $scale) . PHP_EOL;
    }
}