<?php

namespace Zoop\Theme\DataModel;

interface ContentAssetInterface extends FileAssetInterface
{
    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     */
    public function setContent($content);
}
