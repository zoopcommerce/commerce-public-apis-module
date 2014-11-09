<?php

namespace Zoop\Theme\DataModel;

interface FolderAssetInterface extends AssetInterface
{
    /**
     * @return array
     */
    public function getAssets();

    /**
     * @param array $assets
     */
    public function setAssets($assets);

    /**
     * @param AssetInterface $asset
     */
    public function addAsset(AssetInterface $asset);
}
