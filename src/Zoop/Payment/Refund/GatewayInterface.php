<?php

namespace Zoop\Payment\Refund;

use Zoop\Payment\Omnipay\RefundConfigInterface;
use Zoop\Order\DataModel\OrderInterface;

/**
 *
 * @author  Dolly Aswin <dolly.aswin@gmail.com>
 */
interface GatewayInterface
{
    public function refund();
    
    public function getGatewayConfig();
    
    public function setGatewayConfig(Array $gatewayConfig);
    
    public function getRefundConfig();
    
    public function setRefundConfig(RefundConfigInterface $refundConfig);

    public function getOrder();
    
    public function setOrder(OrderInterface $order);
}
