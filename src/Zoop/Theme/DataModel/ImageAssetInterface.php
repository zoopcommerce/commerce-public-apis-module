<?php

namespace Zoop\Theme\DataModel;

interface ImageAssetInterface extends FileAssetInterface
{
    /**
     * @return string
     */
    public function getSrc();

    /**
     * @param string $src
     */
    public function setSrc($src);

    /**
     * @return integer
     */
    public function getHeight();

    /**
     * @param integer $height
     */
    public function setHeight($height);

    /**
     * @return integer
     */
    public function getWidth();

    /**
     * @param integer $width
     */
    public function setWidth($width);

    /**
     * @return string
     */
    public function getExtension();

    /**
     * @param string $extension
     */
    public function setExtension($extension);
}
