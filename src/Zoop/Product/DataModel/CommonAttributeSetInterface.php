<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\Attribute\AttributeInterface;

interface CommonAttributeSetInterface
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
     * @param string $store Store slug
     */
    public function addStore($store);

    /**
     * @return array
     */
    public function getAttributes();

    /**
     *
     * @param array $attributes
     */
    public function setAttributes(array $attributes);

    /**
     *
     * @param AttributeInterface $attribute
     */
    public function addAttribute(AttributeInterface $attribute);
}
