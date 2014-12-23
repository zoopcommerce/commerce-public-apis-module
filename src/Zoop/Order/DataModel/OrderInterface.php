<?php

namespace Zoop\Order\DataModel;

use \DateTime;
use Zoop\Store\DataModel\StoreFilterInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Zoop\Common\DataModel\AddressInterface;
use Zoop\Order\DataModel\Item\ItemInterface;
use Zoop\Order\DataModel\TotalInterface;
use Zoop\Order\DataModel\CommissionInterface;
use Zoop\Order\DataModel\HistoryInterface;
use Zoop\Promotion\DataModel\PromotionInterface;

interface OrderInterface extends StoreFilterInterface
{
    /**
     * @return DateTime
     */
    public function getCreatedOn();

    /**
     * @return string
     */
    public function getCreatedBy();

    /**
     * @return DateTime
     */
    public function getUpdatedOn();

    /**
     * @return string
     */
    public function getUpdatedBy();

    /**
     * @return string
     */
    public function getId();

    /**
     *
     * @return string
     */
    public function getStore();

    /**
     *
     * @param string $store The store slug
     */
    public function setStore($store);

    /**
     *
     * @return TotalInterface
     */
    public function getTotal();

    /**
     *
     * @param TotalInterface $total
     */
    public function setTotal(TotalInterface $total);

    /**
     *
     * @return string
     */
    public function getShippingMethod();

    /**
     *
     * @param string $shippingMethod
     */
    public function setShippingMethod($shippingMethod);

    /**
     *
     * @return string
     */
    public function getState();

    /**
     *
     * @param string $state
     */
    public function setState($state);

    /**
     *
     * @return array
     */
    public function getHistory();

    /**
     *
     * @param array $history
     */
    public function setHistory($history);

    /**
     *
     * @param HistoryInterface $history
     */
    public function addHistory(HistoryInterface $history);

    /**
     * @return Commission
     */
    public function getCommission();

    /**
     *
     * @param CommissionInterface $commission
     */
    public function setCommission(CommissionInterface $commission);

    /**
     *
     * @return string
     */
    public function getEmail();

    /**
     *
     * @param string $email
     */
    public function setEmail($email);

    /**
     *
     * @return string
     */
    public function getFirstName();

    /**
     *
     * @param string $firstName
     */
    public function setFirstName($firstName);

    /**
     *
     * @return string
     */
    public function getLastName();

    /**
     *
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     *
     * @return string
     */
    public function getFullName();

    /**
     *
     * @return string
     */
    public function getPhone();

    /**
     *
     * @param string $phone
     */
    public function setPhone($phone);

    /**
     *
     * @return AddressInterface
     */
    public function getCustomerAddress();

    /**
     *
     * @param AddressInterface $address
     */
    public function setCustomerAddress(AddressInterface $customerAddress);

    /**
     *
     * @return AddressInterface
     */
    public function getShippingAddress();

    /**
     *
     * @param AddressInterface $address
     */
    public function setShippingAddress(AddressInterface $shippingAddress);

    /**
     *
     * @return string
     */
    public function getCoupon();

    /**
     *
     * @param string $coupon
     */
    public function setCoupon($coupon);

    /**
     *
     * @return boolean
     */
    public function isInvoiceSent();

    /**
     *
     * @param boolean $invoiceSent
     */
    public function setIsInvoiceSent($invoiceSent);

    /**
     *
     * @return array
     */
    public function getPromotions();

    /**
     *
     * @param array $promotions
     */
    public function setPromotions($promotions);

    /**
     *
     * @param PromotionInterface $promotion
     */
    public function addPromotion(PromotionInterface $promotion);

    /**
     *
     * @return string
     */
    public function getPaymentMethod();

    /**
     *
     * @param string $paymentMethod
     */
    public function setPaymentMethod($paymentMethod);

    /**
     *
     * @return DateTime
     */
    public function getDateCompleted();

    /**
     *
     * @param DateTime $dateCompleted
     */
    public function setDateCompleted(DateTime $dateCompleted);

    /**
     *
     * @return boolean
     */
    public function hasProducts();

    /**
     *
     * @return boolean
     */
    public function isComplete();

    /**
     *
     * @param boolean $isComplete
     */
    public function setIsComplete($isComplete);

    /**
     *
     * @return boolean
     */
    public function isWaitingForPayment();

    /**
     *
     * @param boolean $isWaitingForPayment
     */
    public function setIsWaitingForPayment($isWaitingForPayment);

    /**
     *
     * @return array
     */
    public function getItems();

    /**
     *
     * @param array|ArrayCollection $items
     */
    public function setItems($items);

    /**
     *
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item);
}
