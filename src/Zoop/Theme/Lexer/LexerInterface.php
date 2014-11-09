<?php

namespace Zoop\Theme\Lexer;

use Zoop\Theme\Lexer\Regex\RegexInterface;

interface LexerInterface
{
    /**
     * @return array
     */
    public function getRegexes();

    /**
     * @param array $regexes
     */
    public function setRegexes($regexes = []);

    /**
     * @param RegexInterface $regex
     */
    public function addRegex(RegexInterface $regex);

    /**
     * @return string
     */
    public function getRelativeFilePath();
    
    /**
     * @param string $relativeFilePath
     */
    public function setRelativeFilePath($relativeFilePath);

    /**
     * @return string
     */
    public function getTempDirectory();

    /**
     * @param string $tempDirectory
     */
    public function setTempDirectory($tempDirectory);

    /**
     * @param string $content
     * @return TokenStream
     * @throws Exception
     */
    public function tokenize($content);
}
