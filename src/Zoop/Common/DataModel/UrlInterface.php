<?php

namespace Zoop\Common\DataModel;

interface UrlInterface
{
    /**
     * @return string
     */
    public function getRelative();

    /**
     * @param string $relative
     */
    public function setRelative($relative);

    /**
     * @return string
     */
    public function getAbsolute();

    /**
     * @param string $absolute
     */
    public function setAbsolute($absolute);
}
