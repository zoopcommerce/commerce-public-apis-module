<?php

namespace Zoop\Order\DataModel;

use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Zoop\Common\DataModel\AddressInterface;
use Zoop\Order\DataModel\Item\ItemInterface;
use Zoop\Order\DataModel\TotalInterface;
use Zoop\Order\DataModel\CommissionInterface;
use Zoop\Order\DataModel\HistoryInterface;
use Zoop\Promotion\DataModel\PromotionInterface;

interface OrderInterface
{
    /**
     * @return DateTime
     */
    public function getCreatedOn();

    /**
     * @return DateTime
     */
    public function getUpdatedOn();

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
     * @return int
     */
    public function getLegacyId();

    /**
     *
     * @param int $legacyId
     */
    public function setLegacyId($legacyId);

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
     * @return ArrayCollection
     */
    public function getHistory();

    /**
     *
     * @param ArrayCollection $history
     */
    public function setHistory(ArrayCollection $history);

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
    public function getAddress();

    /**
     *
     * @param AddressInterface $address
     */
    public function setAddress(AddressInterface $address);

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
     * @return ArrayCollection
     */
    public function getPromotions();

    /**
     *
     * @param ArrayCollection $promotions
     */
    public function setPromotions(ArrayCollection $promotions);

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
     * @return ArrayCollection
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