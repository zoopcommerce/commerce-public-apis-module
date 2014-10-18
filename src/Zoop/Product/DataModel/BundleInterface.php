<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\ProductInterface;

/**
 * @ODM\Document
 * @Shard\AccessControl({
 *     @Shard\Permission\Basic(roles="*", allow="*")
 * })
 */
interface BundleInterface
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
     * @param ProductInterface $product
     */
    public function addBundledProduct(ProductInterface $product);
}
