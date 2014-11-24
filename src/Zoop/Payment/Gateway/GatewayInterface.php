<?php

namespace Zoop\Payment\Gateway;

use Zoop\Payment\Omnipay\PurchaseConfig;
use Zoop\Order\DataModel\OrderInterface;

/**
 *
 * @author  Josh Stuart <josh.stuart@zoopcommerce.com>
 */
interface GatewayInterface
{
    public function purchase();
    
    public function getGatewayConfig();
    
    public function setGatewayConfig(Array $gatewayConfig);
    
    public function getPurchaseConfig();
    
    public function setPurchaseConfig(PurchaseConfig $purchaseConfig);

    public function getOrder();
    
    public function setOrder(OrderInterface $order);
}
