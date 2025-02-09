<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\REST\Value;

use EzSystems\EzPlatformRest\Value as RestValue;

class BulkOperationResponse extends RestValue
{
    /** @var \EzSystems\EzPlatformAdminUi\REST\Value\OperationResponse[] */
    public $operations;

    /**
     * @param \EzSystems\EzPlatformAdminUi\REST\Value\OperationResponse[] $operations
     */
    public function __construct($operations)
    {
        $this->operations = $operations;
    }
}

class_alias(BulkOperationResponse::class, 'EzSystems\EzPlatformAdminUi\REST\Value\BulkOperationResponse');
