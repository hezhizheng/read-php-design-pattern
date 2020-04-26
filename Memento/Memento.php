<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 17:05
 * Created by PhpStorm.
 */

namespace Memento;
class Memento
{
    /**
     * 备忘录列表
     *
     * @var array
     */
    private $_mementoList = [];

    /**
     * 添加编辑器实例状态
     *
     * @param Editor $editor 编辑器实例
     */
    function add(Editor $editor)
    {
        array_push($this->_mementoList, $editor);
    }

    /**
     * 返回编辑器实例上个状态
     *
     * @param Editor $editor 编辑器实例
     */
    function undo()
    {
        return array_pop($this->_mementoList);
    }

    /**
     * 返回编辑器实例开始状态
     *
     * @param Editor $editor 编辑器实例
     */
    function redo()
    {
        return array_shift($this->_mementoList);
    }
}