<?php

namespace Zoop\Common\DataModel;

interface RegionInterface
{
    public function getName();

    public function setName($name);

    public function getCode();

    public function setCode($code);

    public function getTimeZone();

    public function setTimeZone($timeZone);
}