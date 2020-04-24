<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/24
 * Time: 16:02
 * Created by PhpStorm.
 */
namespace Filter;
class SportsPerson
{
    public $gender;
    public $type;

    public function __construct($gender, $type)
    {
        $this->gender = $gender;
        $this->type = $type;
    }
}