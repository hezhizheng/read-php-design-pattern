<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/21
 * Time: 22:52
 * Created by PhpStorm.
 */

namespace Adapter;

interface LogApi
{
    public function saveLog($type ,Logger $logger);
}