<?php

namespace Zoop\Order\DataModel;

interface CommissionInterface
{
    /**
     * @return float
     */
    public function getAmount();

    /**
     * @param float $amount
     */
    public function setAmount($amount);

    /**
     * @return float
     */
    public function getCharged();

    /**
     * @param float $charged
     */
    public function setCharged($charged);
}
