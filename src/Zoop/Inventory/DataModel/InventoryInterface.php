<?php

namespace Zoop\Inventory\DataModel;

use \DateTime;
use Zoop\Product\DataModel\ProductInterface;

interface InventoryInterface
{
    /**
     * @return string
     */
    public function getCreatedBy();

    /**
     * @return DateTime
     */
    public function getCreatedOn();

    /**
     * @return string
     */
    public function getUpdatedBy();

    /**
     * @return DateTime
     */
    public function getUpdatedOn();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return array
     */
    public function getStores();

    /**
     * @param array $stores
     */
    public function setStores($stores);

    /**
     * @param string $store
     */
    public function addStore($store);

    /**
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     */
    public function setProduct(ProductInterface $product);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

    /**
     * @return DateTime
     */
    public function getStateExpiry();

    /**
     * @param DateTime $stateExpiry
     */
    public function setStateExpiry(DateTime $stateExpiry);
}