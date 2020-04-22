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
    public function saveRedisLog(Logger $logger)
    {
        // TODO: Implement saveRedisLog() method.
    }

    public function saveMysqlLog(Logger $logger)
    {
        // TODO: Implement saveMysqlLog() method.
        echo "save mysql log" . PHP_EOL;
        var_dump($logger);
    }
}