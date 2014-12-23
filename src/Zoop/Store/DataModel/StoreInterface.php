<?php

namespace Zoop\Store\DataModel;

use Zoop\Entity\DataModel\EntityInterface;
use Zoop\Common\DataModel\CurrencyInterface;
use Zoop\Store\DataModel\RegionalTaxationRuleInterface;

interface StoreInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getLegacyId();

    /**
     * @param int $legacyId
     */
    public function setLegacyId($legacyId);

    /**
     * @return array
     */
    public function getCurrencies();

    /**
     * @param array $currencies
     */
    public function setCurrencies($currencies);

    /**
     * @param CurrencyInterface $currency
     */
    public function addCurrency(CurrencyInterface $currency);

    /**
     * @return string
     */
    public function getBusinessName();

    /**
     * @param string $businessName
     */
    public function setBusinessName($businessName);

    /**
     * @return string
     */
    public function getSalesEmail();

    /**
     * @param string $salesEmail
     */
    public function setSalesEmail($salesEmail);

    /**
     * @return array
     */
    public function getRegionalTaxationRules();

    /**
     * @param array $regionalTaxationRules
     * @SuppressWarnings(PHPMD.LongVariable)
     */
    public function setRegionalTaxationRules($regionalTaxationRules);

    /**
     * @param string $countryCode
     * @param RegionalTaxationRuleInterface $regionTaxationRule
     */
    public function addRegionalTaxationRule($countryCode, RegionalTaxationRuleInterface $regionTaxationRule);

    /**
     * @return string
     */
    public function getCheckoutUrl();

    /**
     * @param string $checkoutUrl
     */
    public function setCheckoutUrl($checkoutUrl);
}
