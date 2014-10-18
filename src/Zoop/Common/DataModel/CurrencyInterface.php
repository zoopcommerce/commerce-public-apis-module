<?php

namespace Zoop\Common\DataModel;

interface CurrencyInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getSymbol();

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);
}
