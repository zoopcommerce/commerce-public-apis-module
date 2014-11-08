<?php

namespace Zoop\Theme\Serializer\Asset;

use \SplFileInfo;

/**
 *
 * @author Josh Stuart <josh.stuart@zoopcommerce.com>
 */
interface UnserializerInterface
{
    /**
     * @return AssetUnserializer
     */
    public function fromFile(SplFileInfo $file);

    /**
     * @return string
     */
    public function getTempDirectory();

    /**
     * @param string $tempDirectory
     */
    public function setTempDirectory($tempDirectory);
}
