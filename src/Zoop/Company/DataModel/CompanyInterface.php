<?php

namespace Zoop\Company\DataModel;

use Zoop\Common\DataModel\AddressInterface;
use Zoop\Partner\DataModel\PartnerInterface;

interface CompanyInterface
{
    public function getCreatedBy();

    public function getCreatedOn();

    public function getUpdatedBy();

    public function getUpdatedOn();

    public function getId();

    public function getName();

    public function setName($name);

    public function getEmail();

    public function setEmail($email);

    public function getPhoneNumber();

    public function setPhoneNumber($phoneNumber);

    public function getAddress();

    public function setAddress(AddressInterface $address);

    public function getPartner();

    public function setPartner(PartnerInterface $partner);
}