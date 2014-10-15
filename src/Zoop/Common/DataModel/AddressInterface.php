<?php

namespace Zoop\Common\DataModel;

interface AddressInterface
{
    public function getLine1();

    public function setLine1($line1);

    public function getLine2();

    public function setLine2($line2);

    public function getCity();

    public function setCity($city);

    public function getState();

    public function setState($state);

    public function getPostcode();

    public function setPostcode($postcode);

    public function getCountry();

    public function setCountry($country);
}