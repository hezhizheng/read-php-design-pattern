<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/21
 * Time: 22:57
 * Created by PhpStorm.
 */

namespace Adapter;

class MysqlLog implements DBLogApi
{
    public function saveRedisLog(array $logData = [])
    {
        // TODO: Implement saveRedisLog() method.
    }

    public function saveMysqlLog(array $logData = [])
    {
        // TODO: Implement saveMysqlLog() method.
        echo "save mysql log" . PHP_EOL;
        var_dump($logData);
    }
}