<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 17:34
 * Created by PhpStorm.
 */

namespace Command;

namespace Command;
class Console
{
    protected $_notes = [];

    public function add(Notes $notes)
    {
        array_push($this->_notes, $notes);
    }

    public function run()
    {
        /** @var Notes $note */
        foreach ($this->_notes as $note) {
            $note->execute();
        }
    }
}