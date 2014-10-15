<?php

namespace Zoop\Payment\Finalize;

use Zoop\Order\DataModel\OrderInterface;
use Zoop\Payment\DataModel\TransactionInterface;

/**
 *
 * @author  Josh Stuart <josh.stuart@zoopcommerce.com>
 */
interface FinalizeRequestInterface
{
    /**
     * @return float
     */
    public function getAmount();

    /**
     * @return OrderInterface
     */
    public function getOrder();

    /**
     * @return TransactionInterface
     */
    public function getTransaction();

    /**
     * @param float $amount
     */
    public function setAmount($amount);

    /**
     * @param OrderInterface $order
     */
    public function setOrder(OrderInterface $order);

    /**
     * @param TransactionInterface $transaction
     */
    public function setTransaction(TransactionInterface $transaction);
}
