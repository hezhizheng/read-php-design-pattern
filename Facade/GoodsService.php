<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/20
 * Time: 23:52
 * Created by PhpStorm.
 */

namespace Facade;

class GoodsService
{
    public $product;
    public $productType;

    public function __construct(Product $product, ProductType $productType)
    {
        $this->product = $product;
        $this->productType = $productType;
    }

    public function getProduct()
    {
        return $this->product->model();
    }

    public function getProductType()
    {
        return $this->productType->model();
    }
}