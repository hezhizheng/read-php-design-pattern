<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/24
 * Time: 15:01
 * Created by PhpStorm.
 */

namespace Proxy;


class DBQueryProxy implements DBQueryInterface
{
    protected $query = null;

    public function query()
    {
        // TODO: Implement query() method.
        if ( $this->query == null )
        {
            echo " DBQueryProxy is null ".PHP_EOL;
            $this->query = new DBQuery();
        }

        return $this->query->query();
    }
}