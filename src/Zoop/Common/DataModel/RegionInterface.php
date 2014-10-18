<?php

namespace Zoop\Common\DataModel;

interface RegionInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

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
    public function getTimeZone();

    /**
     * @param string $timeZone
     */
    public function setTimeZone($timeZone);
}
