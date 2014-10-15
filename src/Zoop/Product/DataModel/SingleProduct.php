<?php

namespace Zoop\Product\DataModel;

use Doctrine\Common\Collections\ArrayCollection;
use Zoop\Product\DataModel\ProductInterface;
use Zoop\Product\DataModel\Option\AbstractOption;
use Zoop\Product\DataModel\EmbeddedBrand;
use Zoop\Product\DataModel\AbstractSkuDefinition;
use Zoop\Product\DataModel\Attribute\AbstractAttribute;
//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

/**
 * @ODM\Document
 * @Shard\AccessControl({
 *     @Shard\Permission\Basic(roles="*", allow="*")
 * })
 */
class SingleProduct extends AbstractProduct implements ProductInterface
{
    /**
     * @ODM\EmbedOne(targetDocument="EmbeddedBrand")
     */
    protected $brand;

    /**
     * @ODM\EmbedMany(
     *     strategy = "set",
     *     discriminatorField = "type",
     *     discriminatorMap = {
     *         "Dropdown"       = "Zoop\Product\DataModel\Option\Dropdown",
     *         "FileUpload"     = "Zoop\Product\DataModel\Option\FileUpload",
     *         "Radio"          = "Zoop\Product\DataModel\Option\Radio",
     *         "Text"           = "Zoop\Product\DataModel\Option\Text",
     *         "Hidden"         = "Zoop\Product\DataModel\Option\Hidden"
     *     }
     * )
     */
    protected $options;

    /**
     * @ODM\EmbedMany(
     *     strategy = "set",
     *     discriminatorField = "type",
     *     discriminatorMap = {
     *         "File"   = "Zoop\Product\DataModel\Attribute\File",
     *         "Number" = "Zoop\Product\DataModel\Attribute\Number",
     *         "Text"   = "Zoop\Product\DataModel\Attribute\Text"
     *     }
     * )
     */
    protected $attributes;

    /**
     *
     * @ODM\String
     */
    protected $notForIndividualSale;

    /**
     * @ODM\EmbedMany(
     *     strategy = "set",
     *     discriminatorField = "type",
     *     discriminatorMap = {
     *         "Physical"  = "Zoop\Product\DataModel\PhysicalSkuDefinition",
     *         "Digital"   = "Zoop\Product\DataModel\DigitalSkuDefinition"
     *     }
     * )
     */
    protected $skuDefinitions;

    public function __construct()
    {
        $this->suppliers = new ArrayCollection();
        $this->options = new ArrayCollection();
        $this->skuDefinitions = new ArrayCollection();
    }

    /**
     *
     * @return EmbeddedBrand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     *
     * @param EmbeddedBrand $brand
     */
    public function setBrand(EmbeddedBrand $brand)
    {
        $this->brand = $brand;
    }

    /**
     *
     * @return ArrayCollection
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     *
     * @param ArrayCollection $options
     */
    public function setOptions(ArrayCollection $options)
    {
        $this->options = $options;
    }

    /**
     * @param AbstractOption $option
     */
    public function addOption(AbstractOption $option)
    {
        $this->getOptions()->add($option);
    }

    /**
     *
     * @return ArrayCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ArrayCollection $attributes
     */
    public function setAttributes(ArrayCollection $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     *
     * @param AbstractAttribute $attribute
     */
    public function addAttribute(AbstractAttribute $attribute)
    {
        $this->getAttributes()->add($attribute);
    }

    /**
     *
     * @return boolean
     */
    public function getNotForIndividualSale()
    {
        return $this->notForIndividualSale;
    }

    /**
     *
     * @param boolean $notForIndividualSale
     */
    public function setNotForIndividualSale($notForIndividualSale)
    {
        $this->notForIndividualSale = (boolean) $notForIndividualSale;
    }

    /**
     *
     * @return ArrayCollection
     */
    public function getSkuDefinitions()
    {
        return $this->skuDefinitions;
    }

    /**
     * @param ArrayCollection $skuDefinitions
     */
    public function setSkuDefinitions(ArrayCollection $skuDefinitions)
    {
        $this->skuDefinitions = $skuDefinitions;
    }

    /**
     * @param AbstractSkuDefinition $skuDefinition
     */
    public function addSkuDefinition(AbstractSkuDefinition $skuDefinition)
    {
        $this->getSkuDefinitions()->add($skuDefinition);
    }
}
