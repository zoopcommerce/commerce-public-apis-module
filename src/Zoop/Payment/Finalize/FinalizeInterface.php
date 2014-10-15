<?php

namespace Zoop\Payment\Finalize;

use Zoop\Payment\Finalize\FinalizeRequestInterface;

/**
 *
 * @author  Josh Stuart <josh.stuart@zoopcommerce.com>
 */
interface FinalizeInterface
{
    /**
     * @param FinalizeRequest $chargeRequest
     * @return FinalizeResponse
     */
    public function finalize(FinalizeRequestInterface $chargeRequest);
}
