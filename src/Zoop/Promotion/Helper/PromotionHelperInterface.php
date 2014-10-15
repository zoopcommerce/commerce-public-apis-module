<?php

namespace Zoop\Promotion\Helper;

use Zoop\Promotion\Helper\PromotionManagerInterface;
use Zoop\Promotion\DataModel\PromotionInterface;
use Zoop\Order\DataModel\OrderInterface;

interface PromotionHelperInterface
{
    /**
     * @param PromotionManagerInterface $promotionManager
     */
    public function setPromotionManager(PromotionManagerInterface $promotionManager);

    /**
     * @return PromotionManagerInterface
     */
    public function getPromotionManager();

    /**
     * When a payment is canceled reset the expiry to 20mins
     *
     * @param OrderInterface $order
     * @param string $expiry
     * @return boolean
     */
    public function setPaymentCanceled(OrderInterface $order, $expiry = '+20 Minutes');

    /**
     * Update the checkout to a little longer to coincide with inventory
     *
     * @param OrderInterface $order
     * @param string $expiry
     * @return boolean
     */
    public function setCheckoutInProgress(OrderInterface $order, $expiry = '+40 Minutes');

    /**
     * Helper method for setting a 3hour expiry when a person is paying for an order
     *
     * @param OrderInterface $order
     * @param string $expiry
     * @return boolean
     */
    public function setPaymentInProgress(OrderInterface $order, $expiry = '+3 Hours');

    /**
     * Reserves a promo for 20mins
     *
     * @param OrderInterface $order
     * @param string $expiry
     * @return boolean
     */
    public function setAddToCart(OrderInterface $order, $expiry = '+20 Minutes');

    /**
     * Sets a limited promo to "used" and stores the order id.
     * Only tores the order id for unlimited promos.
     *
     * @param OrderInterface $order
     * @param PromotionInterface $promotion
     * @return boolean
     */
    public function setUsed(OrderInterface $order, PromotionInterface $promotion);

    /**
     * resets all expired limited promos
     */
    public function garbageCollection();
}
