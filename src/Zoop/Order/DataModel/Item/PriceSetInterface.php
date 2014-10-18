<?php

namespace Zoop\Order\DataModel\Item;

use Zoop\Order\DataModel\Item\PriceInterface;

interface PriceSetInterface
{
    /**
     *
     * @return PriceInterface
     */
    public function getUnit();

    /**
     *
     * @return PriceInterface
     */
    public function getTotal();

    /**
     *
     * @param PriceInterface $unit
     */
    public function setUnit(PriceInterface $unit);

    /**
     *
     * @param PriceInterface $total
     */
    public function setTotal(PriceInterface $total);
}
