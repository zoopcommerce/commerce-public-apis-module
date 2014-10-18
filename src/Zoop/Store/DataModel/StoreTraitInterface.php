<?php

namespace Zoop\Store\DataModel;

interface StoreTraitInterface
{
    /**
     * @return string
     */
    public function getStore();

    /**
     * @param string $store
     */
    public function setStore($store);
}
