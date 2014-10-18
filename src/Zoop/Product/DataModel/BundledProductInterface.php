<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\PriceAdjustmentInterface;
use Zoop\Product\DataModel\SingleProductInterface;

/**
 * @ODM\EmbeddedDocument
 * @Shard\AccessControl({
 *     @Shard\Permission\Basic(roles="*", allow="*")
 * })
 */
interface BundledProductInterface
{
    /**
     * @return array
     */
    public function getProducts();
    /**
     * @param array $products
     */
    public function setProducts($products);

    /**
     * @param SingleProductInterface $products
     */
    public function addProduct(SingleProductInterface $products);

    /**
     * @return boolean
     */
    public function isRequired();

    /**
     * @param boolean $isRequired
     */
    public function setIsRequired($isRequired);

    /**
     * @return PriceAdjusPriceAdjustmentInterfacetment
     */
    public function getPriceAdjustment();

    /**
     * @param PriceAdjustmentInterface $priceAdjustment
     */
    public function setPriceAdjustment(PriceAdjustmentInterface $priceAdjustment);
}
