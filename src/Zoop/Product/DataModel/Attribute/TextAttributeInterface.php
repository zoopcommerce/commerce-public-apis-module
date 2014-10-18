<?php

namespace Zoop\Product\DataModel\Attribute;

interface TextAttributeInterface
{
    /**
     * @return string
     */
    public function getValue();

    /**
     * @param string $value
     */
    public function setValue($value);
}
