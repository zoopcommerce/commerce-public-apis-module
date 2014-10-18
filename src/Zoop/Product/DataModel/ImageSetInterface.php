<?php

namespace Zoop\Product\DataModel;

use Zoop\Common\File\DataModel\ImageInterface;

interface ImageSetInterface
{
    /**
     * @return ImageInterface
     */
    public function getRaw();

    /**
     * @param ImageInterface $raw
     */
    public function setRaw(ImageInterface $raw);

    /**
     * @return ImageInterface
     */
    public function getExtraLarge();

    /**
     * @param ImageInterface $extraLarge
     */
    public function setExtraLarge(ImageInterface $extraLarge);

    /**
     * @return ImageInterface
     */
    public function getLarge();

    /**
     * @param ImageInterface $large
     */
    public function setLarge(ImageInterface $large);

    /**
     * @return ImageInterface
     */
    public function getMedium();

    /**
     * @param ImageInterface $medium
     */
    public function setMedium(ImageInterface $medium);

    /**
     * @return ImageInterface
     */
    public function getSmall();

    /**
     * @param ImageInterface $small
     */
    public function setSmall(ImageInterface $small);

    /**
     * @return ImageInterface
     */
    public function getThumbnail();

    /**
     * @param ImageInterface $thumbnail
     */
    public function setThumbnail(ImageInterface $thumbnail);

    /**
     * @return ImageInterface
     */
    public function getAdminFeatureSmall();

    /**
     * @param ImageInterface $adminFeatureSmall
     */
    public function setAdminFeatureSmall(ImageInterface $adminFeatureSmall);

    /**
     * @return ImageInterface
     */
    public function getAdminThumbnailSmall();

    /**
     * @param ImageInterface $adminThumbnailSmall
     */
    public function setAdminThumbnailSmall(ImageInterface $adminThumbnailSmall);

    /**
     * @return ImageInterface
     */
    public function getAdminFeatureLarge();

    /**
     * @param ImageInterface $adminFeatureLarge
     */
    public function setAdminFeatureLarge(ImageInterface $adminFeatureLarge);

    /**
     * @return ImageInterface
     */
    public function getAdminThumbnailLarge();

    /**
     * @param ImageInterface $adminThumbnailLarge
     */
    public function setAdminThumbnailLarge(ImageInterface $adminThumbnailLarge);
}
