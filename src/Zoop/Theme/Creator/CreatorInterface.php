<?php

namespace Zoop\Theme\Creator;

use Zend\Mvc\MvcEvent;
use Zoop\ShardModule\Controller\Result;

/**
 * @author Josh Stuart <josh.stuart@zoopcommerce.com>
 */
interface CreatorInterface
{
    /**
     * @param MvcEvent $event
     * @return Result
     */
    public function create(MvcEvent $event);
}
