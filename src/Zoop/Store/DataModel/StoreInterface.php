<?php

namespace Zoop\Store\DataModel;

use Zoop\Common\DataModel\Address;
use Zoop\Common\DataModel\Currency;

/**
 * @SuppressWarnings(PHPMD.LongVariable)
 */
interface StoreInterface
{
    public function getId();

    public function getSlug();

    public function setSlug($slug);

    public function getName();

    public function setName($name);

    public function getSubdomain();

    public function setSubdomain($subdomain);

    public function getCustomDomain();

    public function setCustomDomain($customDomain);

    public function getDomain();

    public function getDomains();

    public function setDomains(array $domains);

    public function getLegacyId();

    public function setLegacyId($legacyId);

    public function getCurrencies();

    public function setCurrencies($currencies);

    public function addCurrency(Currency $currency);

    public function getAddress();

    public function setAddress(Address $address);

    public function getPhoneNumber();

    public function setPhoneNumber($phoneNumber);

    public function getBusinessName();

    public function setBusinessName($businessName);

    public function getEmail();

    public function setEmail($email);

    public function getSalesEmail();

    public function setSalesEmail($salesEmail);

    public function getDescription();

    public function setDescription($description);

    public function getRegionalTaxationRules();

    public function setRegionalTaxationRules($regionalTaxationRules);

    public function addRegionalTaxationRule($countryCode, RegionalTaxationRule $regionTaxationRule);

    public function getFacebook();

    public function setFacebook($facebook);

    public function getTwitter();

    public function setTwitter($twitter);

    public function getYoutube();

    public function setYoutube($youtube);

    public function getInstagram();

    public function setInstagram($instagram);

    public function getGooglePlus();

    public function setGooglePlus($googlePlus);

    public function getPinterest();

    public function setPinterest($pinterest);

    public function getAuthorizationCode();

    public function setAuthorizationCode($authorizationCode);

    public function getGoogleWebmasterToolsMetaContent();

    public function setGoogleWebmasterToolsMetaContent($googleWebmasterToolsMetaContent);

    public function getGoogleAnalyticsTrackingId();

    public function setGoogleAnalyticsTrackingId($googleAnalyticsTrackingId);

    public function isMaintenanceMode();

    public function setIsMaintenanceMode($isMaintenanceMode);

    public function getUrl();

    public function setUrl($url);

    public function getCheckoutUrl();

    public function setCheckoutUrl($checkoutUrl);
}
