<?php

namespace Zoop\Common\DataModel;

interface CustomHtmlInterface
{
    /**
     * @return string
     */
    public function getAppend();

    /**
     * @param string $append
     */
    public function setAppend($append);

    /**
     * @return string
     */
    public function getPrepend();

    /**
     * @param string $prepend
     */
    public function setPrepend($prepend);
}
