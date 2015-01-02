<?php

namespace Zoop\Order\DataModel\Item;

use Zoop\Common\File\DataModel\FileInterface;

interface DigitalSkuInterface extends SkuInterface
{
    /**
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
     * @return integer
     */
    public function getNumberOfDownloads();

    /**
     *
     * @param integer $numberOfDownloads
     */
    public function setNumberOfDownloads($numberOfDownloads);

    /**
     * Increases the download count
     */
    public function incrementNumberOfDownloads();

    /**
     * Decreases the download count
     */
    public function decrementNumberOfDownloads();

    /**
     *
     * @return FileInterface
     */
    public function getFile();

    /**
     *
     * @param FileInterface $file
     */
    public function setFile(FileInterface $file);
}
