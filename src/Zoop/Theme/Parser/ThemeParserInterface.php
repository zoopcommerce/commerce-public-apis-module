<?php

namespace Zoop\Theme\Parser;

use Zoop\Theme\Parser\ThemeParserInterface;

interface ThemeParserInterface
{
    /**
     * Iterates through the themes` assets to find additional assets 
     * within content
     * 
     * @param ThemeParserInterface $theme
     */
    public function parse(ThemeParserInterface $theme);
}
