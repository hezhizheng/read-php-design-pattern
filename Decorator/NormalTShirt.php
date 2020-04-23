<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/23
 * Time: 0:29
 * Created by PhpStorm.
 */

namespace Decorator;

class NormalTShirt implements TShirtApi
{
    public function product()
    {
        // TODO: Implement product() method.
        echo " action NormalTShirt ".PHP_EOL;
        return 'is normal t-shirt';
    }
}