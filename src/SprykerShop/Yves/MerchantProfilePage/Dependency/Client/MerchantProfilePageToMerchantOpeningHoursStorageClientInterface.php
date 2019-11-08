<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\MerchantProfilePage\Dependency\Client;

use Generated\Shared\Transfer\MerchantOpeningHoursStorageTransfer;

interface MerchantProfilePageToMerchantOpeningHoursStorageClientInterface
{
    /**
     * @param int $idMerchant
     *
     * @return \Generated\Shared\Transfer\MerchantOpeningHoursStorageTransfer|null
     */
    public function findMerchantOpeningHoursByIdMerchant(int $idMerchant): ?MerchantOpeningHoursStorageTransfer;
}
