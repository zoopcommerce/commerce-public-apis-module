<?php

namespace Zoop\Company\DataModel;

use \DateTime;
use Zoop\Common\DataModel\AddressInterface;
use Zoop\Partner\DataModel\PartnerInterface;

interface CompanyInterface
{
    /**
     * @return string
     */
    public function getCreatedBy();

    /**
     * @return DateTime
     */
    public function getCreatedOn();

    /**
     * @return string
     */
    public function getUpdatedBy();

    /**
     * @return DateTime
     */
    public function getUpdatedOn();

    /**
     * @return string
     */
    public function getId();

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
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * @return AddressInterface
     */
    public function getAddress();

    /**
     * @param AddressInterface $address
     */
    public function setAddress(AddressInterface $address);

    /**
     * @return PartnerInterface
     */
    public function getPartner();

    /**
     * @param PartnerInterface $partner
     */
    public function setPartner(PartnerInterface $partner);
}
