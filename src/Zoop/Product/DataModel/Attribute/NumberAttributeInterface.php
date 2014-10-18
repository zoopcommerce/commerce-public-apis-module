<?php

namespace Zoop\Product\DataModel\Attribute;

interface NumberAttributeInterface
{
    /**
     * @return string
     */
    public function getValue();

    /**
     * @return string
     */
    public function getUnit();

    /**
     * @param string $value
     */
    public function setValue($value);

    /**
     * @param string $unit
     */
    public function setUnit($unit);
}
