<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/24
 * Time: 15:48
 * Created by PhpStorm.
 */
namespace Filter;
interface FilterInterface
{
    /**
     * 需要过滤的实体
     * @param array $entity
     * @return mixed
     */
    public function filter(array $entity);
}