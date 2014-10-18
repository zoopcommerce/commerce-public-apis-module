<?php

namespace Zoop\Product\DataModel\Attribute;

use Zoop\Common\DataModel\FileInterface;

interface FileAttributeInterface
{
    /**
     * @return FileInterface
     */
    public function getFile();

    /**
     * @param FileInterface $file
     */
    public function setFile(FileInterface $file);
}
