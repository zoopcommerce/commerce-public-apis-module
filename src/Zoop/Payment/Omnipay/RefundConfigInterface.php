<?php

namespace Zoop\Payment\Omnipay;

/**
 *
 * @author  Dolly Aswin <dolly.aswin@gmail.com>
 */
interface RefundConfigInterface
{
    public function setTransactionReference($transactionReference);
    
    public function getTransactionReference();
    
    public function getAmount();
    
    public function setAmount($amount);
}
