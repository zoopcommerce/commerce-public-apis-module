<?php

namespace Zoop\Product\DataModel;

interface EmbeddedBrandInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param string $slug
     */
    public function setSlug($slug);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);
}
