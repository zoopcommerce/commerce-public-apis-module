<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\ShippingRateInterface;
use Zoop\Product\DataModel\DimensionsInterface;
use Zoop\Product\DataModel\EmbeddedSupplierInterface;

interface PhysicalSkuDefinitionInterface
{
    /**
     * @return array
     */
    public function getShippingRates();

    /**
     * @param array $shippingRates
     */
    public function setShippingRates($shippingRates);

    /**
     * @param ShippingRateInterface $shippingRate
     */
    public function addShippingRate(ShippingRateInterface $shippingRate);

    /**
     * @return DimensionsInterface
     */
    public function getDimensions();

    /**
     * @param DimensionsInterface $dimensions
     */
    public function setDimensions(DimensionsInterface $dimensions);

    /**
     * @return array
     */
    public function getSuppliers();

    /**
     * @param array $suppliers
     */
    public function setSuppliers($suppliers);

    /**
     * @param EmbeddedSupplierInterface $supplier
     */
    public function addSupplier(EmbeddedSupplierInterface $supplier);

    /**
     * @return integer
     */
    public function getQuantity();

    /**
     * @param integer $quantity
     */
    public function setQuantity($quantity);
}
