<?php

namespace Zoop\Theme\Manager;

interface TemplateManagerInterface
{
    public function setFile($file);

    public function render();

    public function setVariable($key, $value, $merge = true);
}
