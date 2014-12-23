<?php

namespace Zoop\Entity\DataModel;

//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

interface EntitiesTraitInterface
{
    /**
     * @return array
     */
    public function getEntities();

    /**
     * @param array $entities
     */
    public function setEntities(array $entities);

    /**
     * @param string $store
     */
    public function addEntity($store);
}
