<?php

namespace Zoop\Entity\DataModel;

use Zoop\Entity\DataModel\EntityInterface;
//Annotation imports
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Zoop\Shard\Annotation\Annotations as Shard;

interface ChildEntityInterface extends EntityInterface
{
    /**
     * @return EntityInterface
     */
    public function getParent();
    
    /**
     * @return EntityInterface
     */
    public function setParent(EntityInterface $parent);
}