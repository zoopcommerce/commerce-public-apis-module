<?php

namespace Zoop\Order\DataModel;

use Zoop\Common\DataModel\CurrencyInterface;

interface TotalInterface
{
    /**
     *
     * @return float
     */
    public function getShippingPrice();

    /**
     *
     * @param float $shippingPrice
     */
    public function setShippingPrice($shippingPrice);

    /**
     * @return float
     */
    public function getProductWholesalePrice();

    /**
     * @param float $productWholesalePrice
     */
    public function setProductWholesalePrice($productWholesalePrice);

    /**
     * @return float
     */
    public function getProductListPrice();

    /**
     * @param float $productListPrice
     */
    public function setProductListPrice($productListPrice);

    /**
     * @return float
     */
    public function getProductSubTotalPrice();

    /**
     * @param float $productSubTotalPrice
     */
    public function setProductSubTotalPrice($productSubTotalPrice);

    /**
     * @return float
     */
    public function getTaxIncluded();

    /**
     * @param float $taxIncluded
     */
    public function setTaxIncluded($taxIncluded);

    /**
     *
     * @return integer
     */
    public function getProductQuantity();

    /**
     *
     * @param integer $productQuantity
     */
    public function setProductQuantity($productQuantity);

    /**
     *
     * @return float
     */
    public function getDiscountPrice();

    /**
     *
     * @param float $discountPrice
     */
    public function setDiscountPrice($discountPrice);

    /**
     *
     * @return float
     */
    public function getOrderPrice();

    /**
     *
     * @param float $orderPrice
     */
    public function setOrderPrice($orderPrice);

    /**
     *
     * @return CurrencyInterface
     */
    public function getCurrency();

    /**
     *
     * @param CurrencyInterface $currency
     */
    public function setCurrency(CurrencyInterface $currency);
}