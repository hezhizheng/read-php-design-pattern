<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 23:14
 * Created by PhpStorm.
 */

namespace Mediator;


class Model extends Colleague
{
    protected $users = [];

    public function addUser($user)
    {
        array_push($this->users, $user);
    }

    public function getUserList()
    {
        var_dump($this->users);
    }

    public function delUser($user)
    {
        $index = array_search($user, $this->users, true);
        unset($this->users[$index]);
    }
}