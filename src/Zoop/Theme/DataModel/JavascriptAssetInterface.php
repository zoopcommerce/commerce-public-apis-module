<?php

namespace Zoop\Theme\DataModel;

interface JavascriptAssetInterface extends ContentAssetInterface
{
    /**
     * @return string
     */
    public function getSrc();

    /**
     * @param string $src
     */
    public function setSrc($src);
}
