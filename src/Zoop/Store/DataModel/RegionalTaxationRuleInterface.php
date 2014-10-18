<?php

namespace Zoop\Store\DataModel;

use Zoop\Common\DataModel\TaxationRuleInterface;
use Zoop\Common\DataModel\RegionInterface;

interface RegionalTaxationRuleInterface
{
    /**
     * @return TaxationRuleInterface
     */
    public function getTax();

    /**
     * @param TaxationRuleInterface $tax
     */
    public function setTax(TaxationRuleInterface $tax);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string $country
     */
    public function setCountry($country);

    /**
     * @return RegionInterface
     */
    public function getRegion();

    /**
     * @param RegionInterface $region
     */
    public function setRegion(RegionInterface $region);

    /**
     * @return string
     */
    public function getPostcode();

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode);
}
