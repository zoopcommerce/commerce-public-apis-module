<?php

namespace Zoop\Theme\DataModel;

use \DateTime;
use Zoop\Store\DataModel\StoresFilterInterface;
use Zoop\Theme\DataModel\ThemeInterface;

interface AssetInterface extends StoresFilterInterface
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
     * @return ThemeInterface|AssetInterface
     */
    public function getParent();

    /**
     * @param ThemeInterface|AssetInterface $parent
     */
    public function setParent($parent);

    /**
     * @return boolean
     */
    public function isWritable();

    /**
     * @return boolean
     */
    public function isDeletable();

    /**
     * @param boolean $writable
     */
    public function setWritable($writable);

    /**
     * @param boolean $deletable
     */
    public function setDeletable($deletable);

    /**
     * @return string
     */
    public function getPath();

    /**
     * @param string $path
     */
    public function setPath($path);

    /**
     * @return string
     */
    public function getPathName();

    /**
     * @param string $pathname
     */
    public function setPathName($pathname);

    /**
     * @return ThemeInterface
     */
    public function getTheme();

    /**
     * @param ThemeInterface $theme
     */
    public function setTheme(ThemeInterface $theme);
}
