<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\BundledProductInterface;
use Zoop\Product\DataModel\ProductInterface;

/**
 * @ODM\Document
 * @Shard\AccessControl({
 *     @Shard\Permission\Basic(roles="*", allow="*")
 * })
 */
interface BundleInterface extends ProductInterface
{
    /**
     * @return array
     */
    public function getBundledProducts();

    /**
     * @param array $bundledProducts
     */
    public function setBundledProducts($bundledProducts);

    /**
     * @param BundledProductInterface $product
     */
    public function addBundledProduct(BundledProductInterface $product);
}
