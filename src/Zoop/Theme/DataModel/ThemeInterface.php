<?php

namespace Zoop\Theme\DataModel;

use \DateTime;

interface ThemeInterface
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
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return boolean
     */
    public function isWriteable();

    /**
     * @param boolean $writeable
     */
    public function setWriteable($writeable);

    /**
     * @return boolean
     */
    public function isDeleteable();

    /**
     * @param boolean $deleteable
     */
    public function setDeleteable($deleteable);

    /**
     * @return array
     */
    public function getAssets();

    /**
     * @param array $assets
     */
    public function setAssets($assets);

    /**
     * @param AssetInterface $asset
     */
    public function addAsset(AssetInterface $asset);
}
