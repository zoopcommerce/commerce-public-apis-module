<?php

namespace Zoop\Store\DataModel;

//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

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
