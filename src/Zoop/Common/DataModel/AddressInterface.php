<?php

namespace Zoop\Common\DataModel;

interface AddressInterface
{
    /**
     * @return string
     */
    public function getLine1();

    /**
     * @param string $line1
     */
    public function setLine1($line1);

    /**
     * @return string
     */
    public function getLine2();

    /**
     * @param string $line2
     */
    public function setLine2($line2);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getPostcode();

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string $country
     */
    public function setCountry($country);
}
