<?php

namespace Zoop\Product\DataModel;

use Zoop\Common\DataModel\FileInterface;

interface DigitalSkuDefinitionInterface
{
    /**
     * @return File
     */
    public function getFile();

    /**
     * @param File $file
     */
    public function setFile(FileInterface $file);
}
