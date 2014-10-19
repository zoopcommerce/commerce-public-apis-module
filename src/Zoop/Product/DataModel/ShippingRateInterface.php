<?php

namespace Zoop\Product\DataModel;

interface ShippingRateInterface
{
    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param stringe $country The 2 letter country code
     */
    public function setCountry($country);

    /**
     * @return float
     */
    public function getSingleRate();

    /**
     * @param float $singleRate
     */
    public function setSingleRate($singleRate);

    /**
     * @return float
     */
    public function getAdditionalRate();

    /**
     * @param float $additionalRate
     */
    public function setAdditionalRate($additionalRate);
}
