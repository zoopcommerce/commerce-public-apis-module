<?php

namespace Zoop\Order\DataModel\Item;

use Zoop\Order\DataModel\Item\SkuInterface;

interface SingleItemInterface
{
    /**
     * @return SkuInterface
     */
    public function getSku();

    /**
     * @param SkuInterface $sku
     */
    public function setSku(SkuInterface $sku);
}
