<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/21
 * Time: 23:10
 * Created by PhpStorm.
 */

namespace Adapter;

class LogAction implements LogApi
{
    public function saveLog($type, array $logData = [])
    {
        $log = new LogAdapter($type);
        return $log->saveLog($logData);
    }
}