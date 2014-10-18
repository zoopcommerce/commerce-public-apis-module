<?php

namespace Zoop\Theme\Tokenizer;

use Zoop\Theme\Tokenizer\Token\TokenInterface;

interface TokenStreamInterface
{
    /**
     * @return array
     */
    public function getTokens();

    /**
     * @param array $tokens
     */
    public function setTokens($tokens);

    /**
     * @param TokenInterface $token
     */
    public function addToken(TokenInterface $token);
}
