<?php

namespace Zoop\Payment\DataModel;

interface PinGatewayConfigInterface
{
    /**
     * @return string
     */
    public function getSecretKey();

    /**
     * @param string $secretKey
     */
    public function setSecretKey($secretKey);
}
