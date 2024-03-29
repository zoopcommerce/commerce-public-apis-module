<?php

namespace Zoop\Order\DataModel\Item\Option;

use Zoop\Common\File\DataModel\FileInterface;

interface FileUploadInterface extends OptionInterface
{
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
