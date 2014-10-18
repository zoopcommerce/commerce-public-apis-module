<?php

namespace Zoop\Common\DataModel;

interface TaxationRuleInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return float
     */
    public function getRate();

    /**
     * @param float $rate
     */
    public function setRate($rate);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param string $number
     */
    public function setNumber($number);

    /**
     * @return boolean
     */
    public function isShippingTaxed();

    /**
     * @param boolean $isShippingTaxed
     */
    public function setIsShippingTaxed($isShippingTaxed);

    /**
     * @return boolean
     */
    public function isTaxIncluded();

    /**
     * @param boolean $isTaxIncluded
     */
    public function setIsTaxIncluded($isTaxIncluded);

    /**
     * @return boolean
     */
    public function isTaxRemoved();

    /**
     * @param boolean $isTaxRemoved
     */
    public function setIsTaxRemoved($isTaxRemoved);
}
