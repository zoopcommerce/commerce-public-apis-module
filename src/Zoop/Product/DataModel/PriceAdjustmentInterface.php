<?php

namespace Zoop\Product\DataModel;

interface PriceAdjustmentInterface
{
    /**
     * @return string
     */
    public function getType();

    /**
     * @return float
     */
    public function getAdjustment();

    /**
     * @param string $type
     */
    public function setType($type);

    /**
     * @param float $adjustment
     */
    public function setAdjustment($adjustment);
}
