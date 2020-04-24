<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/24
 * Time: 16:05
 * Created by PhpStorm.
 */

namespace Filter;
class FilterType implements FilterInterface
{
    public $_type;

    public function __construct($type)
    {
        $this->_type = $type;
    }

    /**
     * @inheritDoc
     */
    public function filter(array $entity)
    {
        // TODO: Implement filter() method.
        $filter = [];
        foreach ($entity as $key => $item) {
            if ($this->_type === $item->type) {
                $filter[] = $entity[$key];
            }
        }

        return $filter;
    }
}