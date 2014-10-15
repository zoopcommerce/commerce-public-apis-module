<?php

namespace Zoop\Common\DataModel;

interface CustomHtmlInterface
{
    public function getAppend();

    public function setAppend($append);

    public function getPrepend();

    public function setPrepend($prepend);
}