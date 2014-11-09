<?php

namespace Zoop\Theme\Linter;

use Zoop\Theme\DataModel\ThemeInterface;
use Zoop\Theme\DataModel\PrivateThemeInterface;

interface ThemeLinterInterface
{
    /**
     * @param ThemeInterface $theme
     * @return type
     */
    public function lint(ThemeInterface $theme);

    /**
     * @return PrivateThemeInterface
     */
    public function getThemeStructure();

    /**
     * @param PrivateThemeInterface $themeStructure
     */
    public function setThemeStructure(PrivateThemeInterface $themeStructure);
}
