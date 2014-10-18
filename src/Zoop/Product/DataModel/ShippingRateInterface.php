<?php

namespace Zoop\Product\DataModel;

interface ShippingRateInterface
{
    /**
     * @return Country
     */
    public function getCountry();

    /**
     * @param Country $country
     */
    public function setCountry(Country $country);

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
