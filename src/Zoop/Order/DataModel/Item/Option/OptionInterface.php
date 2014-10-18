<?php

namespace Zoop\Order\DataModel\Item\Option;

interface OptionInterface
{
    /**
     *
     * @return string
     */
    public function getLabel();

    /**
     *
     * @param string $label
     */
    public function setLabel($label);

    /**
     *
     * @return string
     */
    public function getValue();

    /**
     *
     * @param string $value
     */
    public function setValue($value);
}
