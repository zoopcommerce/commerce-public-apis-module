<?php

namespace Zoop\Payment\DataModel;

interface StripeGatewayConfigInterface
{
    /**
     * @return string
     */
    public function getApiKey();
    
    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey);
}
