<?php

namespace Zoop\Theme\Parser;

use Zoop\Theme\Serializer\Asset\UnserializerInterface;

interface DirectoryParserInterface
{
    /**
     * @param string $directory
     * @return array
     */
    public function parse($directory);

    /**
     * @return UnserializerInterface
     */
    public function getUnserializer();

    /**
     * @param UnserializerInterface $unserializer
     */
    public function setUnserializer(UnserializerInterface $unserializer);
}
