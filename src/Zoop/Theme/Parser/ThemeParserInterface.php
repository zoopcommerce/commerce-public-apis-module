<?php

namespace Zoop\Theme\Parser;

use Zoop\Theme\DataModel\ThemeInterface;

interface ThemeParserInterface
{
    /**
     * Iterates through the themes` assets to find additional assets
     * within content
     *
     * @param ThemeInterface $theme
     */
    public function parse(ThemeInterface $theme);
}
