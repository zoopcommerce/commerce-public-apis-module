<?php

namespace Zoop\Product\DataModel\Option;

interface DropdownOptionInterface
{
    /**
     * @return array
     */
    public function getValues();

    /**
     * @param array $values
     */
    public function setValues($values);

    /**
     * @param string $value
     */
    public function addValue($value);
}
