<?php

namespace Zoop\Payment\DataModel;

use \DateTime;
use Zoop\Payment\DataModel\TransactionInterface;

interface GatewayConfigInterface
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
     * @return array
     */
    public function getStores();

    /**
     * @param array $stores
     */
    public function setStores($stores);

    /**
     * @param string $store
     */
    public function addStore($store);

    /**
     * The label to display to the customer in the checkout
     *
     * @return string
     */
    public function getLabel();

    /**
     * Sets the label that the customer will see in
     * the checkout
     *
     * @param string $label
     */
    public function setLabel($label);

    /**
     * @return array
     */
    public function getCountries();

    /**
     * @param array $countries
     */
    public function setCountries($countries);

    /**
     * 2 letter country code
     *
     * @param string $country
     */
    public function addCountry($country);

    /**
     * @return TransactionInterface
     */
    public function getTransactionFee();

    /**
     * @param TransactionInterface $transactionFee
     */
    public function setTransactionFee(TransactionInterface $transactionFee);
}
