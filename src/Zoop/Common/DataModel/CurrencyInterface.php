<?php

namespace Zoop\Common\DataModel;

interface CurrencyInterface
{
    public function getCode();

    public function setCode($code);

    public function getSymbol();

    public function setSymbol($symbol);

    public function getName();

    public function setName($name);
}