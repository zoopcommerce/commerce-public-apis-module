<?php

namespace Zoop\Product\DataModel;

use Zoop\Product\DataModel\SkuDefinitionInterface;

interface SupplierInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param type $slug
     */
    public function setSlug($slug);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

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
