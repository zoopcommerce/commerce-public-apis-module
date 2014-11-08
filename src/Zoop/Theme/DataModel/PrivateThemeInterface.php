<?php

namespace Zoop\Theme\DataModel;

interface PrivateThemeInterface extends ThemeInterface
{
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
     * @return boolean
     */
    public function isActive();

    /**
     * @param boolean $isActive
     */
    public function setIsActive($isActive);
}
