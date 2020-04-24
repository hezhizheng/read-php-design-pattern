<?php


namespace Proxy;

class DBQuery implements DBQueryInterface
{
    public function __construct()
    {
        echo "init connect" . PHP_EOL;
    }

    public function query()
    {
        // TODO: Implement query() method.
        echo "query ing...." . PHP_EOL;
    }
}