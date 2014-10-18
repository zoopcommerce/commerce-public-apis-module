<?php

namespace Zoop\Store\DataModel;

interface StoresTraitInterface
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
     * @return string
     */
    public function addStore($store);
}
