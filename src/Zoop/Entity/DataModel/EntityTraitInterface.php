<?php

namespace Zoop\Entity\DataModel;

//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

interface EntityTraitInterface
{
    /**
     * @return string
     */
    public function getEntity();

    /**
     * @param string $entity
     */
    public function setEntity($entity);
}
