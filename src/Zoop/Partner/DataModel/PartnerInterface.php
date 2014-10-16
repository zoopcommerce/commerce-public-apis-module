<?php

namespace Zoop\Partner\DataModel;

use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Zoop\Common\DataModel\AddressInterface;
use Zoop\Company\DataModel\CompanyInterface;

interface PartnerInterface
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
     * @return Address
     */
    public function getAddress();

    /**
     * @param AddressInterface $address
     */
    public function setAddress(AddressInterface $address);

    /**
     * @return ArrayCollection
     */
    public function getCompanies();

    /**
     * @param ArrayCollection|array $companies
     */
    public function setCompanies($companies);

    /**
     * @param CompanyInterface $company
     */
    public function addCompany(CompanyInterface $company);
}
