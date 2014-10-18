<?php

namespace Zoop\Product\DataModel;

interface CustomAttributeSetInterface
{
    /**
     * @return array
     */
    public function getStores();

    /**
     * @param array $stores
     */
    public function setStores(array $stores);

    /**
     * @param string $store
     */
    public function addStore($store);
}
