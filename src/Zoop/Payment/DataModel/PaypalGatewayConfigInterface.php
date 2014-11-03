<?php

namespace Zoop\Payment\DataModel;

interface PayPalGatewayConfigInterface
{
    /**
     * @return string
     */
    public function getUsername();

    /**
     * @param string $username
     */
    public function setUsername($username);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param string $password
     */
    public function setPassword($password);

    /**
     * @return string
     */
    public function getSignature();

    /**
     * @param string $signature
     */
    public function setSignature($signature);
}
