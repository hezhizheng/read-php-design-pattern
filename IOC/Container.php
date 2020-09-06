<?php
/**
 * Description: IOC 超级工厂
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/9/6
 * Time: 15:45
 * Created by PhpStorm.
 */

namespace IOC;
class Container
{
    protected $binds;

    protected $instances; // 实例

    /**
     * @param ?void|string $abstract 抽象
     * @param ?void|\Closure $concrete 实体
     */
    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof \Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this); // 在数组开头插入一个或多个单元

        // $this->binds[$abstract] 存的都是回调函数
        // call_user_func_array // 调用回调函数，并把一个数组参数作为回调函数的参数
        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}