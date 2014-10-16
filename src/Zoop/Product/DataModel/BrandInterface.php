<?php

namespace Zoop\Product\DataModel;

use Zoop\Store\DataModel\StoreInterface;

interface BrandInterface
{
    /**
     *
     * @return string
     */
    public function getId();

    /**
     *
     * @return string
     */
    public function getSlug();

    /**
     *
     * @param string $slug
     */
    public function setSlug($slug);

    /**
     *
     * @return string
     */
    public function getName();

    /**
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * @return array
     */
    public function getStores();

    /**
     *
     * @param array $stores
     */
    public function setStores($stores);

    /**
     * @param StoreInterface $store
     */
    public function addStore(StoreInterface $store);
}
