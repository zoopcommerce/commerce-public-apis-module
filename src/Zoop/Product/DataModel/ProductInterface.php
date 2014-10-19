<?php

namespace Zoop\Product\DataModel;

use \DateTime;
use Zoop\Collection\DataModel\CollectionInterface;
use Zoop\Common\DataModel\UrlInterface;
use Zoop\Product\DataModel\ImageSetInterface;

interface ProductInterface
{
    /**
     * @return string
     */
    public function getCreatedBy();

    /**
     * @return DateTime
     */
    public function getCreatedOn();

    /**
     * @return string
     */
    public function getUpdatedBy();

    /**
     * @return DateTime
     */
    public function getUpdatedOn();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param string $slug
     */
    public function setSlug($slug);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     */
    public function setDescription($description);

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
    public function getStores();

    /**
     * @param array $stores
     */
    public function setStores(array $stores);

    /**
     * @param string $store
     */
    public function addStore($store);

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @param type $metaDescription
     */
    public function setMetaDescription($metaDescription);

    /**
     * @return array
     */
    public function getCollections();

    /**
     * @param array $categories
     */
    public function setCollections($categories);

    /**
     * @param CollectionInterface $category
     */
    public function addCollection(CollectionInterface $category);

    /**
     * @return boolean
     */
    public function isHidden();

    /**
     * @param boolean $hidden
     */
    public function setHidden($hidden);

    /**
     * @return Url
     */
    public function getUrl();

    /**
     * @param UrlInterface $url
     */
    public function setUrl(UrlInterface $url);

    /**
     * @return array
     */
    public function getImageSets();

    /**
     * @param array $imageSets
     */
    public function setImageSets($imageSets);

    /**
     * @param ImageSetInterface $image
     */
    public function addImageSet(ImageSetInterface $image);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

    /**
     * @return boolean
     */
    public function canPurchase();

    /**
     * @param boolean $canPurchase
     */
    public function setCanPurchase($canPurchase);

    /**
     * @return PriceInterface
     */
    public function getPrice();

    /**
     * @param PriceInterface $price
     */
    public function setPrice(PriceInterface $price);
}
