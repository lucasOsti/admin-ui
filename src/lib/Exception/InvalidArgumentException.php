<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\AdminUi\Exception;

use eZ\Publish\Core\Base\Exceptions\InvalidArgumentException as BaseInvalidArgumentException;

class InvalidArgumentException extends BaseInvalidArgumentException
{
}

class_alias(InvalidArgumentException::class, 'EzSystems\EzPlatformAdminUi\Exception\InvalidArgumentException');
