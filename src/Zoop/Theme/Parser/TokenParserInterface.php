<?php

namespace Zoop\Theme\Parser;

use Zoop\Theme\Tokenizer\TokenStream;

interface TokenParserInterface
{
    public function parse(TokenStream $tokenStream);
}
