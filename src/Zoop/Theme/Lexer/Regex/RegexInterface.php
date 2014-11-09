<?php

namespace Zoop\Theme\Lexer\Regex;

interface RegexInterface
{
    /**
     * @return string
     */
    public function getTokenRegex();

    /**
     * @param string $tokenRegex
     */
    public function setTokenRegex($tokenRegex);

    /**
     * @return string
     */
    public function __toString();
}
