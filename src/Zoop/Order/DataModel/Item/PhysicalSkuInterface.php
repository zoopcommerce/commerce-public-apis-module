<?php

namespace Zoop\Order\DataModel\Item;

use Zoop\Product\DataModel\DimensionsInterface;

interface PhysicalSkuInterface
{
    /**
     * @return DimensionsInterface
     */
    public function getDimensions();

    /**
     * @param DimensionsInterface $dimensions
     */
    public function setDimensions(DimensionsInterface $dimensions);
}
