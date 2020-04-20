<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Facade/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Facade\GoodsService;
use Facade\Product;
use Facade\ProductType;

$product = new Product();
$productType = new ProductType();

// service 类 提供 product 跟 productType 的实现方法
$service = new GoodsService($product, $productType);

$_product = $service->getProduct();
$_productType = $service->getProductType();

var_dump(
    compact('_product', '_productType'),
    $_product == $product->model(),
    $_productType == $productType->model()
);