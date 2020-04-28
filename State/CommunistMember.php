<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/28
 * Time: 15:42
 * Created by PhpStorm.
 */

namespace State;
class CommunistMember implements ReportStateInterface
{

    public function report()
    {
        // TODO: Implement report() method.
        echo  "一般读书到初中就会面对".PHP_EOL;
    }
}