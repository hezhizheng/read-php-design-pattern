<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 23:05
 * Created by PhpStorm.
 */

namespace Mediator;

interface Mediator
{
    public function addUser($user);

    public function getUserList();

    public function delUser($user);

    public function show($res);
}