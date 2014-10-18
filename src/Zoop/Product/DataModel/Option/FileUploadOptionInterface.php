<?php

namespace Zoop\Product\DataModel\Option;

use Zoop\Common\DataModel\FileInterface;

interface FileUploadOptionInterface
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
