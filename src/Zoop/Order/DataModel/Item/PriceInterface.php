<?php

namespace Zoop\Order\DataModel\Item;

interface PriceInterface
{
    /**
     * @return float
     */
    public function getWholesale();

    /**
     * @return float
     */
    public function getList();

    /**
     * @return float
     */
    public function getSale();

    /**
     * @return float
     */
    public function getSubTotal();

    /**
     * @return float
     */
    public function getTaxIncluded();

    /**
     * @return float
     */
    public function getShipping();

    /**
     * @return float
     */
    public function getCartDiscount();

    /**
     * @return float
     */
    public function getShippingDiscount();

    /**
     * @return float
     */
    public function getProductDiscount();

    /**
     *
     * @param type $wholesale
     */
    public function setWholesale($wholesale);

    /**
     *
     * @param type $list
     */
    public function setList($list);

    /**
     *
     * @param type $sale
     */
    public function setSale($sale);

    /**
     *
     * @param type $subTotal
     */
    public function setSubTotal($subTotal);

    /**
     *
     * @param type $taxIncluded
     */
    public function setTaxIncluded($taxIncluded);

    /**
     *
     * @param type $shipping
     */
    public function setShipping($shipping);

    /**
     *
     * @param type $cartDiscount
     */
    public function setCartDiscount($cartDiscount);

    /**
     *
     * @param type $shippingDiscount
     */
    public function setShippingDiscount($shippingDiscount);

    /**
     *
     * @param type $productDiscount
     */
    public function setProductDiscount($productDiscount);
}
