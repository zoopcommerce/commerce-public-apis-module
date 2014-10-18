<?php

namespace Zoop\Store\DataModel;

use Zoop\Common\DataModel\AddressInterface;
use Zoop\Common\DataModel\CurrencyInterface;
use Zoop\Store\DataModel\RegionalTaxationRuleInterface;

/**
 * @SuppressWarnings(PHPMD.LongVariable)
 */
interface StoreInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param string $slug
     */
    public function setSlug($slug);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getSubdomain();

    /**
     * @param string $subdomain
     */
    public function setSubdomain($subdomain);

    /**
     * @return string
     */
    public function getCustomDomain();

    /**
     * @param string $customDomain
     */
    public function setCustomDomain($customDomain);

    /**
     * @return array
     */
    public function getDomains();

    /**
     * @param array $domains
     */
    public function setDomains(array $domains);

    /**
     * @param string $domain
     */
    public function addDomain($domain);

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
     * @return AddressInterface
     */
    public function getAddress();

    /**
     * @param AddressInterface $address
     */
    public function setAddress(AddressInterface $address);

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber);

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
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getSalesEmail();

    /**
     * @param string $salesEmail
     */
    public function setSalesEmail($salesEmail);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return array
     */
    public function getRegionalTaxationRules();

    /**
     * @param array $regionalTaxationRules
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
    public function getFacebook();

    /**
     * @param string $facebook
     */
    public function setFacebook($facebook);

    /**
     * @return string
     */
    public function getTwitter();

    /**
     * @param string $twitter
     */
    public function setTwitter($twitter);

    /**
     * @return string
     */
    public function getYoutube();

    /**
     * @param string $youtube
     */
    public function setYoutube($youtube);

    /**
     * @return string
     */
    public function getInstagram();

    /**
     * @param string $instagram
     */
    public function setInstagram($instagram);

    /**
     * @return string
     */
    public function getGooglePlus();

    /**
     * @param string $googlePlus
     */
    public function setGooglePlus($googlePlus);

    /**
     * @return string
     */
    public function getPinterest();

    /**
     * @param string $pinterest
     */
    public function setPinterest($pinterest);

    /**
     * @return string
     */
    public function getAuthorizationCode();

    /**
     * @param string $authorizationCode
     */
    public function setAuthorizationCode($authorizationCode);

    /**
     * @return string
     */
    public function getGoogleWebmasterToolsMetaContent();

    /**
     * @param string $googleWebmasterToolsMetaContent
     */
    public function setGoogleWebmasterToolsMetaContent($googleWebmasterToolsMetaContent);

    /**
     * @return string
     */
    public function getGoogleAnalyticsTrackingId();

    /**
     * @param string $googleAnalyticsTrackingId
     */
    public function setGoogleAnalyticsTrackingId($googleAnalyticsTrackingId);

    /**
     * @return boolean
     */
    public function isMaintenanceMode();

    /**
     * @param boolean $isMaintenanceMode
     */
    public function setIsMaintenanceMode($isMaintenanceMode);

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @param string $url
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getCheckoutUrl();

    /**
     * @param string $checkoutUrl
     */
    public function setCheckoutUrl($checkoutUrl);
}
