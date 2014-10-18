<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\PriceAdjustmentInterface;
use Zoop\Product\DataModel\Option\OptionInterface;

interface SkuDefinitionInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return array
     */
    public function getOptionMap();

    /**
     * @param array $optionMap
     */
    public function setOptionMap(array $optionMap = []);

    /**
     * @param OptionInterface $optionMap
     */
    public function addOptionMap(OptionInterface $optionMap);

    /**
     * @return PriceAdjustmentInterface
     */
    public function getPriceAdjustment();

    /**
     * @param PriceAdjustmentInterface $priceAdjustment
     */
    public function setPriceAdjustment(PriceAdjustmentInterface $priceAdjustment);
}
