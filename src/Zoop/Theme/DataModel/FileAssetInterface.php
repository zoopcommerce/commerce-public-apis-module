<?php

namespace Zoop\Theme\DataModel;

interface FileAssetInterface extends AssetInterface
{
    /**
     * @return string
     */
    public function getMime();

    /**
     * @param string $mime
     */
    public function setMime($mime);
}
