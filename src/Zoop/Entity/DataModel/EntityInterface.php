<?php

namespace Zoop\Entity\DataModel;

use Zoop\Common\DataModel\AddressInterface;
use Zoop\Common\DataModel\SocialInterface;
//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

interface EntityInterface
{
    /**
     * Alias for getSlug
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
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     *
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return SocialInterface
     */
    public function getSocial();

    /**
     * @param SocialInterface $social
     */
    public function setSocial(SocialInterface $social);

    /**
     *
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getPrimaryDomain();

    /**
     * @param string $domain
     */
    public function setPrimaryDomain($domain);

    /**
     * @return string
     */
    public function getDomain();

    /**
     * @return array
     */
    public function getDomains();

    /**
     * @param array $domains
     */
    public function setDomains(array $domains);

    /**
     * @return string
     */
    public function getUrl();

    /**
     *
     * @param string $url
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @return AddressInterface
     */
    public function getAddress();

    /**
     *
     * @param AddressInterface $address
     */
    public function setAddress(AddressInterface $address);

    /**
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * @return string
     */
    public function getGoogleAnalyticsTrackingId();

    /**
     *
     * @param string $googleAnalyticsTrackingId
     * @SuppressWarnings(PHPMD.LongVariable)
     */
    public function setGoogleAnalyticsTrackingId($googleAnalyticsTrackingId);

    /**
     * @return string
     */
    public function getAuthorizationCode();

    /**
     * @param string $authorizationCode
     */
    public function setAuthorizationCode($authorizationCode);

    /**
     * @return boolean
     */
    public function isMaintenanceMode();

    /**
     *
     * @param boolean $isMaintenanceMode
     */
    public function setIsMaintenanceMode($isMaintenanceMode);

    /**
     * @return boolean
     */
    public function isActive();

    /**
     * @param boolean $isActive
     */
    public function setIsActive($isActive);

    /**
     * @return boolean
     */
    public function canDisplay();

    /**
     * @param boolean $canDisplay
     */
    public function setCanDisplay($canDisplay);
}
