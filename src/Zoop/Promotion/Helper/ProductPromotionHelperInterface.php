<?php

namespace Zoop\Promotion\Helper;

use Zoop\Product\DataModel\ProductInterface;

interface ProductPromotionHelperInterface
{
    /**
     * @param ProductInterface $product
     */
    public function apply(ProductInterface $product);
}
