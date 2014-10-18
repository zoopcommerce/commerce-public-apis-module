<?php

namespace Zoop\User\DataModel;

interface ApiCredentialInterface
{
    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $key
     */
    public function setKey($key);

    /**
     * @return string
     */
    public function getSecret();

    /**
     * @param string $secret
     */
    public function setSecret($secret);
}
