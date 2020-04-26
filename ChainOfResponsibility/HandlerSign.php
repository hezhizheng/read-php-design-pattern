<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 15:21
 * Created by PhpStorm.
 */

namespace ChainOfResponsibility;
class HandlerSign extends Handle
{

    public function check(Request $request)
    {
        // TODO: Implement check() method.

        echo "HandlerSign $request->request_id" . PHP_EOL;
    }
}