<?php

namespace Zoop\Common\File\DataModel;

interface FileInterface
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
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getExtension();

    /**
     * @param string $extension
     */
    public function setExtension($extension);

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
    public function getSize();

    /**
     * @param integer $size
     */
    public function setSize($size);
}
