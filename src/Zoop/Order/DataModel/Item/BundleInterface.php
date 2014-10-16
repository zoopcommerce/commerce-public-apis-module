<?php

namespace Zoop\Order\DataModel\Item;

use Doctrine\Common\Collections\ArrayCollection;
use Zoop\Order\DataModel\Item\ItemInterface;

interface BundleInterface
{
    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item);

    /**
     * @return ArrayCollection
     */
    public function getItems();

    /**
     * @param ArrayCollection $items
     */
    public function setItems(ArrayCollection $items);
}
