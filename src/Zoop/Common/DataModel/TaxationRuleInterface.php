<?php

namespace Zoop\Common\DataModel;

interface TaxationRuleInterface
{
    public function getName();

    public function setName($name);

    public function getRate();

    public function setRate($rate);

    public function getNumber();

    public function setNumber($number);

    public function getIsShippingTaxed();

    public function setIsShippingTaxed($isShippingTaxed);

    public function getIsTaxIncluded();

    public function setIsTaxIncluded($isTaxIncluded);

    public function getIsTaxRemoved();

    public function setIsTaxRemoved($isTaxRemoved);
}