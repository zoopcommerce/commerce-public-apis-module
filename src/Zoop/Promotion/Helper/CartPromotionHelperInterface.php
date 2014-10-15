<?php

namespace Zoop\Promotion\Helper;

use Zoop\Order\DataModel\OrderInterface;

interface CartPromotionHelperInterface
{
    /**
     * @param OrderInterface $order
     */
    public function apply(OrderInterface $order);
}
