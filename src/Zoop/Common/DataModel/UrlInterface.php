<?php

namespace Zoop\Common\DataModel;

interface UrlInterface
{
    public function getRelative();

    public function setRelative($relative);

    public function getAbsolute();

    public function setAbsolute($absolute);
}