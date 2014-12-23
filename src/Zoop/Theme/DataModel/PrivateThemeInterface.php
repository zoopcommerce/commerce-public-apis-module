<?php

namespace Zoop\Theme\DataModel;

interface PrivateThemeInterface extends ThemeInterface
{
    /**
     * @return boolean
     */
    public function isActive();

    /**
     * @param boolean $isActive
     */
    public function setIsActive($isActive);
}
