<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/21
 * Time: 22:58
 * Created by PhpStorm.
 */

namespace Adapter;

class RedisLog implements DBLogApi
{
    public function saveRedisLog(Logger $logger)
    {
        // TODO: Implement saveLog() method.
        echo "save redis log" . PHP_EOL;
        var_dump($logger);
    }

    public function saveMysqlLog(Logger $logger)
    {
        // TODO: Implement saveMysqlLog() method.
    }
}