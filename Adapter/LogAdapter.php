<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/21
 * Time: 23:12
 * Created by PhpStorm.
 */

namespace Adapter;

class LogAdapter
{
    const MYSQL_ADAPTER = 'mysql';
    const REDIS_ADAPTER = 'redis';

    protected $type;
    protected $adapter;

    protected $map = [
        'mysql' => [
            'class' => 'Adapter\MysqlLog',
            'funcName' => 'saveMysqlLog',
        ],
        'redis' => [
            'class' => 'Adapter\RedisLog',
            'funcName' => 'saveRedisLog',
        ],
    ];

    public function __construct($type)
    {
        $this->adapter = new $this->map[$type]['class'];
        $this->type = $type;
    }

    public function saveLog(Logger $logger)
    {
        return $this->adapter->{$this->map[$this->type]['funcName']}($logger);
    }


}