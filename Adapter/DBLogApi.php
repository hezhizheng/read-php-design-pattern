<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/21
 * Time: 22:52
 * Created by PhpStorm.
 */

namespace Adapter;

interface DBLogApi
{
    // todo $logData 可以当作类来实现
    public function saveRedisLog(array $logData = []);
    public function saveMysqlLog(array $logData = []);
}