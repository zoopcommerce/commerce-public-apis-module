<?php

namespace Zoop\Product\DataModel\Attribute;

interface AttributeInterface
{
    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     */
    public function setLabel($label);
}
