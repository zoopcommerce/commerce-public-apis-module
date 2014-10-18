<?php

namespace Zoop\Common\File\DataModel;

use Zoop\Common\DataModel\UrlInterface;

interface ImageInterface
{
    /**
     * @return string
     */
    public function getAlt();

    /**
     * @param string $alt
     */
    public function setAlt($alt);

    /**
     * @return string
     */
    public function getMime();

    /**
     * @param string $mime
     */
    public function setMime($mime);

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
     * @return UrlInterface
     */
    public function getUrl();

    /**
     * @param UrlInterface $url
     */
    public function setUrl(UrlInterface $url);

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getExtension();

    /**
     * @param string $extension
     */
    public function setExtension($extension);
}
