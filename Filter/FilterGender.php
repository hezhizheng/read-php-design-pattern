<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/24
 * Time: 16:05
 * Created by PhpStorm.
 */

namespace Filter;
class FilterGender implements FilterInterface
{

    public $_gender;

    public function __construct($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @inheritDoc
     */
    public function filter(array $entity)
    {
        // TODO: Implement filter() method.
        $filter = [];

        foreach ($entity as $key => $item) {
            if ($this->_gender === $item->gender) {
                $filter[] = $entity[$key];
            }
        }

        return $filter;
    }
}