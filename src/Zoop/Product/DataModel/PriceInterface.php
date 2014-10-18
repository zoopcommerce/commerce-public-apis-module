<?php

namespace Zoop\Product\DataModel;

interface PriceInterface
{
    /**
     * @return float
     */
    public function getFull();

    /**
     * @param float $full
     */
    public function setFull($full);

    /**
     * @return float
     */
    public function getSale();

    /**
     * @param float $sale
     */
    public function setSale($sale);

    /**
     * @return float
     */
    public function getWholesale();

    /**
     * @param float $wholesale
     */
    public function setWholesale($wholesale);

    /**
     * @return boolean
     */
    public function isSaleActive();
}
