<?php

namespace Zoop\Product\DataModel;

interface DimensionsInterface
{
    /**
     *
     * @return float
     */
    public function getWeight();

    /**
     *
     * @param float $weight
     */
    public function setWeight($weight);

    /**
     *
     * @return float
     */
    public function getWidth();

    /**
     *
     * @param float $width
     */
    public function setWidth($width);

    /**
     *
     * @return float
     */
    public function getHeight();

    /**
     *
     * @param float $height
     */
    public function setHeight($height);

    /**
     *
     * @return float
     */
    public function getDepth();

    /**
     *
     * @param float $depth
     */
    public function setDepth($depth);
}
