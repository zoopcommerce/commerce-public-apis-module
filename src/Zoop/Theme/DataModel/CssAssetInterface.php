<?php

namespace Zoop\Theme\DataModel;

interface CssAssetInterface extends ContentAssetInterface
{
    /**
     * @return string
     */
    public function getHref();

    /**
     * @param string $href
     */
    public function setHref($href);
}
