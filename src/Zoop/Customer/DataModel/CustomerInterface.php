<?php

namespace Zoop\Customer\DataModel;

use Zoop\Partner\DataModel\PartnerInterface;
use Zoop\Entity\DataModel\ChildEntityInterface;

interface CustomerInterface extends ChildEntityInterface
{
    /**
     * @return PartnerInterface
     */
    public function getPartner();

    /**
     * @return PartnerInterface
     */
    public function setPartner(PartnerInterface $partner);
}
