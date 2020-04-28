<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/28
 * Time: 15:53
 * Created by PhpStorm.
 */

namespace State;
class School
{

    protected $state;

    public $map = [
        'primary' => 'State\YoungPioneer',
        'middle' => 'State\CommunistMember',
        'college' => 'State\PartyMember',
    ];

    /**
     * @param $state
     * @return mixed
     */
    public function report($state)
    {
        $this->state = new $this->map[$state];

        return $this->state->report();
    }
}