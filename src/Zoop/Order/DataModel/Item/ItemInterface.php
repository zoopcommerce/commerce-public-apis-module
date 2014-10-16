<?php

namespace Zoop\Order\DataModel\Item;

use Zoop\Order\DataModel\Item\PriceSetInterface;
use Zoop\Product\DataModel\ImageSetInterface;

interface ItemInterface
{
    /**
     * @return int
     */
    public function getLegacyId();

    /**
     * @param int $legacyId
     */
    public function setLegacyId($legacyId);

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
    public function getImageSets();

    /**
     * @param array $imageSets
     */
    public function setImageSets($imageSets);

    /**
     * @param ImageSetInterface $imageSet
     */
    public function addImageSet(ImageSetInterface $imageSet);

    /**
     * @return PriceSetInterface
     */
    public function getPriceSet();

    /**
     * @param PriceSetInterface $price
     */
    public function setPriceSet(PriceSetInterface $price);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity);
}