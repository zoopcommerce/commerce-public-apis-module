<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\Attribute\AttributeInterface;
use Zoop\Product\DataModel\EmbeddedBrandInterface;
use Zoop\Product\DataModel\Option\OptionInterface;
use Zoop\Product\DataModel\ProductInterface;
use Zoop\Product\DataModel\SkuDefinitionInterface;

interface SingleProductInterface extends ProductInterface
{
    /**
     * @return EmbeddedBrandInterface
     */
    public function getBrand();

    /**
     * @param EmbeddedBrandInterface $brand
     */
    public function setBrand(EmbeddedBrandInterface $brand);

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param array $options
     */
    public function setOptions(array $options);

    /**
     * @param OptionInterface $option
     */
    public function addOption(OptionInterface $option);

    /**
     * @return array
     */
    public function getAttributes();

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes);

    /**
     * @param AttributeInterface $attribute
     */
    public function addAttribute(AttributeInterface $attribute);

    /**
     * @return boolean
     */
    public function isNotForIndividualSale();

    /**
     * @param boolean $isNotForIndividualSale
     *
     * @SuppressWarnings(PHPMD.LongVariable)
     */
    public function setIsNotForIndividualSale($isNotForIndividualSale);

    /**
     * @return array
     */
    public function getSkuDefinitions();

    /**
     * @param array $skuDefinitions
     */
    public function setSkuDefinitions($skuDefinitions);

    /**
     * @param SkuDefinitionInterface $skuDefinition
     */
    public function addSkuDefinition(SkuDefinitionInterface $skuDefinition);
}
