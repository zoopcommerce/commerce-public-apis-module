<?php

namespace Zoop\Order\DataModel\Item;

use Zoop\Order\DataModel\Item\Option\OptionInterface;

interface SkuInterface
{
    /**
     * @return ArrayCollection
     */
    public function getOptions();

    /**
     * @param array $options
     */
    public function setOptions($options);

    /**
     * @param OptionInterface $options
     */
    public function addOption(OptionInterface $option);

    /**
     *
     * @return array
     */
    public function getSuppliers();

    /**
     *
     * @param array $suppliers
     */
    public function setSuppliers($suppliers);

    /**
     * @param string $supplier
     */
    public function addSupplier($supplier);
}
